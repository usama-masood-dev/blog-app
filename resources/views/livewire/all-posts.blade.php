<div>
    <div class="flex items-center justify-between max-w-[700px]">
        <div>
            <select class="px-1 py-1 text-sm border rounded-lg border-slate-300" wire:model.live="perPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <div>
            <input class="text-sm px-3 py-1 rounded-lg w-[200px] border border-slate-300" type="text"
                wire:model.live.debounce.500ms="search" placeholder="Search...">
        </div>
    </div>

    @forelse($posts as $post)
        <div class="py-3 max-w-[700px] border border-slate-200 px-3 rounded-lg my-4 shadow-md hover:shadow-lg">
            <div class="flex items-center justify-between">
                <a href="{{ route('posts.show', $post->id) }}" wire:navigate>
                    <h2 class="py-2 text-xl font-semibold text-slate-800">{{ $post->title }}</h2>
                </a>
                <div class="flex items-center justify-center gap-2">
                    <button>
                        <a wire:navigate href="{{ route('posts.update', $post->id) }}">
                            <x-heroicon-o-pencil class="w-5 h-5 text-slate-800" />
                        </a>
                    </button>
                    <button wire:click="deletePost({{ $post->id }})"
                        onclick="return confirm('Are you really want to delete this post permanently?')">
                        <x-heroicon-o-trash class="w-5 h-5 text-red-600 cursor-pointer" />
                    </button>
                </div>
            </div>
            <p class="text-slate-600">{{ $post->description }}</p>
            <div class="flex items-center justify-between py-2">
                <p><span class="text-base font-semibold text-slate-700">Author:</span> <span
                        class="text-sm text-slate-600">{{ $post->user }}</span></p>
                <p class="pt-2"><span class="text-base font-semibold text-slate-700">Created: </span>
                    <span class="text-sm text-slate-600">{{ $post->formatted_date }}</span>
                </p>
            </div>
            <div>
                Category: {{ $post->category }}
            </div>
            <div>
                Likes: {{ $post->likes_count }}
            </div>
        </div>

    @empty
        <div class="py-3 max-w-[700px] border border-slate-200 px-3 rounded-lg my-4 shadow-md text-slate-700">No
            results found</div>
    @endforelse

    <div class="max-w-[700px] text-slate-700">
        {{ $posts->links() }}
    </div>
</div>
