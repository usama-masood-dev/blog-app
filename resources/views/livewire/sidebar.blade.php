<aside class="fixed w-64 min-h-screen p-4 text-gray-100 bg-gray-800">
    <h2 class="pl-5 mb-8 text-2xl">Blog App</h2>
    <ul>
        <li class="py-1"><a
                class="block px-3 py-2 hover:bg-gray-700 {{ request()->is('dashboard/posts') ? 'bg-gray-700' : '' }}"
                wire:navigate href="{{ route('posts.index') }}">
                <x-heroicon-o-document-text class="inline-block w-5 h-5 mb-1 mr-2 text-slate-100" /> All Posts
            </a>
        </li>
        <li class="py-1"><a
                class="block px-3 py-2 hover:bg-gray-700 {{ request()->is('dashboard/posts/create') ? 'bg-gray-700' : '' }}"
                wire:navigate href="{{ route('posts.create') }}"><x-heroicon-o-pencil
                    class="inline-block w-5 h-5 mb-1 mr-2 text-slate-100" />Create
                Post</a></li>
        <li class="py-1"><a
                class="block px-3 py-2 hover:bg-gray-700 {{ request()->is('dashboard/profile') ? 'bg-gray-700' : '' }}"
                wire:navigate href="{{ route('profile') }}"><x-heroicon-o-user
                    class="inline-block w-5 h-5 mb-1 mr-2 text-slate-100" />Profile</a>
        </li>
        <li class="py-1"><a wire:navigate href="{{ route('logout') }}"
                class="block px-3 py-2 hover:bg-gray-700"><x-heroicon-o-arrow-left-on-rectangle
                    class="inline-block w-5 h-5 mb-1 mr-2 text-slate-100" />Logout</a>
        </li>
    </ul>
</aside>
