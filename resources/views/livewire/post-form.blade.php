<form wire:submit.prevent="saveOrUpdate">
    @csrf
    <div class="py-1">
        <label for="title" class="inline-block pb-2">Title:</label>
        <input class="px-3 block py-1 rounded-lg w-[400px] border border-slate-300" type="text" id="title"
            wire:model="title" placeholder="Title">
        @error('title')
            <p class="py-1 text-sm text-red-600 rounded-lg">{{ $message }}</p>
        @enderror
    </div>

    <div class="py-1">
        <label for="description" class="inline-block pb-2">Description:</label>
        <textarea class="px-3 block py-1 rounded-lg w-[400px] border border-slate-300 h-[200px] resize-none" id="description"
            wire:model="description" placeholder="Description"></textarea>
        @error('description')
            <p class="py-1 text-sm text-red-600 rounded-lg">{{ $message }}</p>
        @enderror
    </div>

    <input type="hidden" wire:model="user_id">

    <div class="py-2">
        <button type="submit"
            class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full hover:border-orange-300 bg-slate-800 text-slate-100">
            {{ $isEditMode ? 'Update' : 'Create' }}
        </button>
        <button type="button"
            class="px-4 py-1 transition-all duration-300 ease-in-out border-2 rounded-full text-slate-800 hover:border-orange-300 bg-slate-300"><a
                href="{{ route('posts.index') }}" wire:navigate>{{ $isEditMode ? 'Cancel' : 'Back to all posts' }}</a>
        </button>
    </div>
</form>
