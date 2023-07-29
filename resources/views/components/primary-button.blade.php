<button {{ $attributes->merge(['class' => 'inline-flex items-center font-main rounded-xl font-semibold text-white hover:scale-105 focus:scale-105 transition-all duration-300']) }}>
    {{ $slot }}
</button>
