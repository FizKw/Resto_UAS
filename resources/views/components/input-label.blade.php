@props(['value'])

<label {{ $attributes->merge(['class' => 'font-semibold text-lg text-kuning-500']) }}>
    {{ $value ?? $slot }}
</label>
