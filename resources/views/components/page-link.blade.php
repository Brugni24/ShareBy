<div {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full text-[13px] bg-white/10 py-2 px-4 font-semibold border border-white/10 text-white mb-[20px] hover:scale-110 focus:scale-110 transition-all duration-300']) }}>
    <span class="mr-[8px]">
        {{ $slot }}
    </span>
    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
</div>
