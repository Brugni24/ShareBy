<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 rounded-[18px] bg-red-600 font-semibold text-sm text-white border border-red-600 hover:scale-110 focus:scale-110 transition-all duration-300']) }}>
    {{ $slot }}
</button>
