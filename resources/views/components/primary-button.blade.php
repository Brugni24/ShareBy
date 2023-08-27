<button {{ $attributes->merge(['class' => 'inline-flex items-center rounded-[18px] bg-primary py-3 px-6 font-semibold text-sm text-white border border-[#7096C7] hover:scale-110 focus:scale-110 transition-all duration-300']) }}>
    {{ $slot }}
</button>
