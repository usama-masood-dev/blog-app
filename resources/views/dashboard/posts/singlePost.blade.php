@extends('layouts.dashboard')
@section('title', $post->title)

@section('content')
    <a href="{{ route('posts.index') }}" class="py-2 text-sm font-semibold text-red-700 underline"
        wire:navigate><x-heroicon-o-backward class="inline-block w-4 h-4 mb-1 mr-1" />Back
        to all posts</a>
    <div class="max-w-[500px] border border-slate-300 px-5 mt-5 shadow-md rounded-lg py-6">
        <h1 class="pb-2 text-3xl font-semibold text-slate-800">{{ $post->title }}</h1>
        <p class="text-slate-800">{{ $post->description }}</p>
        <p class="pt-2"><span class="font-semibold text-slate-700">Author: </span><span
                class="text-sm text-slate-600">{{ $post->user }}</span>
        </p>
        <p class="pb-2"><span class="font-semibold text-slate-700">Created at: </span><span
                class="text-sm text-slate-600">{{ $post->created_at }}</span>
        </p>
    </div>
@endsection
