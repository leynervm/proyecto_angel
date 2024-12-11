<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-3 bg-principal border border-transparent rounded-lg font-semibold text-[10px] text-white uppercase tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
