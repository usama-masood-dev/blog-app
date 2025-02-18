@extends('layouts.dashboard')

@section('title', 'Edit Post')

@section('content')
    <h1 class="py-3 text-3xl font-semibold text-slate-800">Edit Post</h1>
    {{-- <form action="{{ route('posts.edit', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="py-2">
            <label for="title" class="inline-block pb-2">
                Title:
            </label>
            <input class="px-3 block py-2 rounded-lg w-[400px] border border-slate-300" type="text" id="title"
                value="{{ $post->title }}" name="title" placeholder="Title">
        </div>
        <div class="py-2">
            <label for="description" class="inline-block pb-2">
                Description:
            </label>
            <textarea class="px-3 block py-2 rounded-lg w-[400px] border border-slate-300 h-[200px] resize-none" type="text"
                id="description" name="description" placeholder="Description">{{ $post->description }}</textarea>
        </div>
        <input type="hidden" name="user_id" value="1">
        <div class="py-2">
            <button type="submit"
                class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full hover:border-orange-300 bg-slate-800 text-slate-100">Update</button>
            <button type="button" onclick="window.location.href='{{ route('posts.index') }}'"
                class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full text-slate-800 hover:border-orange-300 bg-slate-300 ">Cancel</button>
        </div>
    </form> --}}
    @livewire('post-form', ['post' => $post])
@endsection
