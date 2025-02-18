@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Tailwind --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    {{-- Livewire Styles --}}
    @livewireStyles
    {{-- CSS Files --}}
    @stack('styles')
</head>

<body class="flex flex-col h-screen">

    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    {{-- Livewire Scripts --}}
    @livewireScripts

    {{-- JavaScript Files --}}
    @stack('scripts')
</body>

</html>
