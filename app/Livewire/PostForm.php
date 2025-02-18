<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{
    public $title, $description, $user_id = 2, $post_id;
    public $isEditMode = false;

    public function mount(Post $post = null)
    {
        if ($post && $post->exists) {
            $this->title = $post->title;
            $this->description = $post->description;
            $this->user_id = $post->user_id;
            $this->post_id = $post->id;
            $this->isEditMode = true;
        }
    }


    public function saveOrUpdate()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|integer'
        ]);

        if ($this->isEditMode) {
            Post::where('id', $this->post_id)->update([
                'title' => $this->title,
                'description' => $this->description,
                'updated_at' => now()
            ]);

            session()->flash('message', 'Post updated successfully!');
        }

        if (!$this->isEditMode) {
            Post::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'user_id' => $validatedData['user_id'],
                'created_at' => now()
            ]);

            session()->flash('success', 'Post created successfully!');
        }

        return $this->redirect(route('posts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
