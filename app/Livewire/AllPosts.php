<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AllPosts extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = '';

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);
        if ($post) {
            $post->delete();
            session()->flash('message', 'Post deleted successfully!');
        } else {
            session()->flash('error', 'Post not found!');
        }
    }

    public function render()
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->where('posts.title', 'like', "%{$this->search}%")
            ->orWhere('posts.description', 'like', "%{$this->search}%")
            ->orderBy('created_at', 'desc')
            ->orWhere('users.name', 'like', "%{$this->search}%")
            ->select('posts.*', 'users.name as user')
            ->paginate($this->perPage);

        return view('livewire.all-posts', compact('posts'));
    }
}
