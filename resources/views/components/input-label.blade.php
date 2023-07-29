@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-800 ml-1']) }}>
    {{ $value ?? $slot }}
</label>
