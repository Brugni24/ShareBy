<button {{ $attributes->merge(['class' => 'inline-flex items-center rounded-[18px] text-sm bg-white/10 py-3 px-6 font-semibold border border-white/10 text-white lg:text-base hover:scale-110 focus:scale-110 transition-all duration-300']) }}>
    {{ $slot }}
</button>
