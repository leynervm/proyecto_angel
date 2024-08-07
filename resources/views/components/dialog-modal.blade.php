@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="flex gap-2 justify-between text-lg font-medium text-neutral-900">
            {{ $title }}
            <button wire:click="$set('open', false)"
                class="rounded-md text-red-500 p-2 hover:bg-red-50 focus:bg-red-50 hover:text-red-600 focus:text-red-600 transition-colors ease-in-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="mt-4 text-sm text-neutral-600">
            {{ $content }}
        </div>
    </div>
</x-modal>
