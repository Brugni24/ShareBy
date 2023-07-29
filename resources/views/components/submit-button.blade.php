<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-xl text-white border-2 border-primary bg-primary font-semibold shadow-sm hover:bg-white hover:text-primary focus:bg-white focus:text-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:opacity-25 hover:scale-105 focus:scale-105 transition-all duration-300']) }}>
    {{ $slot }}
</button>
