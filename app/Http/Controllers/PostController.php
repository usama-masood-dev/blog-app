<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class PostController extends Controller
{
    public function getAllPosts()
    {
        return view('dashboard.posts.allPosts');
    }

    public function createPostForm()
    {
        return view("dashboard.posts.create");
    }

    public function storePost(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'user_id' => 'required|integer|exists:users,id',
        // ]);

        // DB::table('posts')->insert([
        //     'title' => $validatedData['title'],
        //     'description' => $validatedData['description'],
        //     'user_id' => $validatedData['user_id'],
        //     'created_at' => now(),
        // ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function showSinglePost(string $id)
    {
        $post = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->where('posts.id', $id)
            ->select('posts.*', 'users.name as user')
            ->first();
        return view("dashboard.posts.singlePost", compact('post'));
    }

    public function updatePostForm(string $id)
    {
        $post = Post::findOrFail($id);

        return view("dashboard.posts.edit", compact('post'));
    }

    // public function editPost(Request $request, string $id)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string'
    //     ]);

    //     DB::table('posts')->where('id', $id)->update([
    //         'title' => $validatedData['title'],
    //         'description' => $validatedData['description'],
    //     ]);

    //     return redirect()->route('posts.index')->with('success', 'Post Edited successfully!');
    // }

    // public function deletePost(string $id)
    // {
    //     DB::table('posts')->where('id', $id)->delete();

    //     return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    // }
}
