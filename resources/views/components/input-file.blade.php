@props(['titulo' => null, 'align' => null, 'icon' => null])

<label
    {{ $attributes->merge(['class' => 'text-[10px] bg-neutral-700 rounded-lg text-white inline-flex gap-2 group relative font-semibold tracking-widest p-2.5 rounded-xs disabled:opacity-25 hover:bg-neutral-800 focus:bg-neutral-800 hover:ring-2 hover:ring-neutral-500 focus:ring-2 focus:ring-neutral-500 cursor-pointer transition ease-in duration-150']) }}>
    @if (isset($icon))
        {{ $icon }}
    @else
        <svg class="w-4 h-4 block" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
    @endif

    {{ $slot }}

    @if (isset($titulo))
        {{ $titulo }}
    @endif
</label>
