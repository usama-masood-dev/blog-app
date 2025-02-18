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
</head>

<body class="bg-gray-100">

    <!-- Sidebar (for logged-in users) -->
    <div class="flex">
        @livewire('sidebar')

        <!-- Main content area -->
        <main class="flex-1 py-[20px] px-[40px] ml-[256px]">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>

</html>
