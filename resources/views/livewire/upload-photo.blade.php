<div class="text-center flex flex-col mt-2" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    <form wire:submit.prevent="save">
        <div>
            <input type="file" wire:model="photo">
        </div>
        @error('photo')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <button type="submit">
            Save Photo
        </button>

        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>

        <div>
            @if ($photo)
                Photo Preview:
                <img src="{{ $photo->temporaryUrl() }}" class="h-64 m-auto" />
            @endif
        </div>
    </form>
</div>
