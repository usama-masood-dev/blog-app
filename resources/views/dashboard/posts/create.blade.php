@extends('layouts.dashboard')

@section('title', 'Create Post')

@section('content')
    <h1 class="py-3 text-3xl font-semibold text-slate-800">Create New Post</h1>
    @livewire('post-form')
@endsection
