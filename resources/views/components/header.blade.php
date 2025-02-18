<header class="px-2 py-4 text-gray-100 bg-gray-800">
    <div class="container max-w-[1100px] m-auto flex items-center justify-between">
        <div class="text-2xl">
            <a href="{{ route('home') }}" wire:navigate>Blog Post</a>
        </div>
        <nav>
            <ul class="flex items-center justify-center gap-4">
                <li><a class="transition-all duration-300 ease-in-out hover:text-orange-300" href="{{ route('home') }}"
                        wire:navigate>Home</a></li>
                <li><a class="transition-all duration-300 ease-in-out hover:text-orange-300"
                        href="{{ route('services') }}" wire:navigate>Services</a></li>
                <li><a class="transition-all duration-300 ease-in-out hover:text-orange-300" href="{{ route('about') }}"
                        wire:navigate>About</a></li>
                <li><a class="transition-all duration-300 ease-in-out hover:text-orange-300"
                        href="{{ route('contact') }}" wire:navigate>Contact</a></li>
                <li><a class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full hover:border-orange-300"
                        href="{{ route('posts.index') }}" wire:navigate>Login</a></li>
                <li><a class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full hover:border-orange-300"
                        href="#" wire:navigate>Signup</a></li>
            </ul>
        </nav>
    </div>
</header>
