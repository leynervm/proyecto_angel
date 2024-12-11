<div {{ $attributes->merge(['class' => 'w-full overflow-x-auto bg-white rounded-lg shadow-lg']) }}>
    <table class="w-full text-xs">
        <thead class="text-principal bg-blue-100 rounded-t-lg">
            {{ $header }}
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
