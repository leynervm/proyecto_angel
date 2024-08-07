@props(['text' => null, 'for'])
<div class="flex items-center w-full">
    <label for="{{ $for }}" class="flex items-center cursor-pointer">
        <div class="relative">
            {{ $slot }}
            <div class="block bg-neutral-100 border w-14 h-8 rounded-full shadow shadow-inner"></div>
            <div class="dot absolute left-1 top-1 bg-neutral-400 w-6 h-6 rounded-full transition"></div>
        </div>
        @if (!empty($text))
            <div class="ml-3 text-neutral-800 font-medium">
                {{ $text }}
            </div>
        @endif
    </label>
    <style>
        input:checked~.dot {
            transform: translateX(100%);
            background-color: #28b361;
        }
    </style>
</div>
