@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600 leading-none']) }}>{{ $message }}</p>
@enderror
