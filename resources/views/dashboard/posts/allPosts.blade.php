@extends('layouts.dashboard')
@section('title', 'All Posts')

@section('content')
    <h1 class="px-3 py-5 text-4xl font-semibold text-slate-800">All Posts</h1>
    @if (session('success'))
        <div x-data="{ show: true, progress: 0 }" x-init="let interval = setInterval(() => {
            if (progress < 100) { progress += 1; } else {
                clearInterval(interval);
                show = false;
            }
        }, 30);" x-show="show"
            class="absolute top-5 right-[100px] flex flex-col gap-1 px-3 pt-2 my-2 text-green-800 bg-green-300 rounded-md max-w-fit shadow-lg transition-opacity duration-500 ease-in-out"
            x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="flex items-center gap-1">
                <x-heroicon-o-check-circle class="inline-block w-4 h-4 font-semibold text-green-800" />
                <p>{{ session('success') }}</p>
            </div>

            {{-- Progress Bar --}}
            <div class="w-full h-1 mt-1 overflow-hidden rounded-full bg-green-500/30">
                <div class="h-full bg-green-700 rounded-full" :style="'width: ' + progress + '%'"></div>
            </div>

        </div>
    @endif


    @livewire('all-posts')
@endsection
