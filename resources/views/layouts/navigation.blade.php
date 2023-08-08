<nav class="bg-secondary">
    <!-- Primary Navigation Menu -->
    <div class="max-w mx-auto px-6 lg:px-8">
        <div class="flex justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center py-4">
                    <a href="{{ route('analisiAziendale') }}">
                        <img class="h-10 w-auto" src="/img/logo_shareBy_white.svg" alt="Logo ShareBy">
                    </a>
                    <hr class="w-12 rotate-90">
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('analisiAziendale')" :active="request()->routeIs('analisiAziendale')">
                        {{ __('Analisi Aziendale') }}
                    </x-nav-link>
                    <x-nav-link :href="route('shareBYOU')" :active="request()->routeIs('shareBYOU')">
                        {{ __('ShareBYOU') }}
                    </x-nav-link>
                    <x-nav-link :href="route('consulente')" :active="request()->routeIs('consulente')">
                        {{ __('Consulente AI') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden py-4 md:flex md:items-center md:ml-6">
                {{-- desktop user menu --}}
                <button id="user-menu-button" class="inline-flex items-center px-3 text-sm leading-4 font-medium text-white focus:outline-none transition ease-in-out duration-150">
                    <span class="sr-only">Open user menu</span>
                    <div class="flex items-center justify-center aspect-square w-10 md:w-11 bg-gray-300 rounded-full">
                        <span class="text-gray-800 font-bold text-lg">A</span>
                    </div>
                </button>
                {{-- dropdown desktop user menu --}}
                <div id="user-dropdown" class="h-[0vh] absolute overflow-hidden right-0 w-min top-20 bg-white rounded-xl mr-4 transition-all duration-1000 ease-[cubic-bezier(.215, .61, .355, 1)] sm:mx-6">
                    <div id="user-dropdown-content" class="opacity-0 transition-all duration-1000 ease-in-out">
                        <div class="px-4 py-3">
                            <span class="block text-md text-gray-900">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                            <span class="block text-sm  text-gray-500 truncate">{{ Auth::user()->email }}</span>
                        </div>
                        <hr class="rounded border-gray-300">
                        <ul class="py-2 px-2 text-md" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{ url('/analisiAziendale') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Dashboard</a>
                            </li>
                            <li>
                                <x-dropdown-link class="block px-4 py-3 text-gray-700 hover:bg-gray-100" :href="route('profile.edit')">
                                    {{ __('Impostazioni') }}
                                </x-dropdown-link>
                            </li>
                            <li>
                                {{-- Authentication --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link class="block px-4 py-3 text-gray-700 hover:bg-gray-100" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Esci') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <script>
                    const user_button = document.querySelector('#user-menu-button');
                    const user_menu = document.querySelector('#user-dropdown');
                    const user_menu_content = document.querySelector('#user-dropdown-content');
        
                    user_button.addEventListener("click", () => {
                        user_menu.classList.toggle("dropdown-user-menu");
                        user_menu_content.classList.toggle("dropdown-menu-content");
                    });
                </script>
            </div>

            <!-- Hamburger -->
            <button id="mobile-menu-button" type="button" class="inline-flex items-center aspect-square justify-center py-4 text-sm text-gray-500 rounded-lg md:hidden hover:scale-110 transition-all duration-300">
                <span class="sr-only">Open main menu</span>
                {{-- hamburger --}}
                <div id="burger-menu">
                    <div id="line1" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                    <div id="line2" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                    <div id="line3" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                </div>
            </button>
            {{-- dropdown mobile menu --}}
            <div id="mobile-menu" class="h-[0vh] absolute left-0 right-0 mx-auto w-full top-[72px] bg-secondary overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                <div id="mobile-menu-content" class="h-full flex flex-col justify-between opacity-0 transition-all duration-1000 ease-in-out">
                    {{-- parte di registrazione del menu --}}
                    <div class="flex flex-col">
                        <div class="mb-12">
                            <a href="{{ url('/analisiAziendale') }}" class="block px-8 py-3 font-medium text-lg text-white">Analisi Aziendale</a>
                            <a href="{{ url('/shareBYOU') }}" class="block px-8 py-3 font-medium text-lg text-white">ShareBYOU</a>
                            <a href="{{ url('/consulente') }}" class="block px-8 py-3 font-medium text-lg text-white">Consulente AI</a>  
                        </div>
                        <div class="flex items-center pl-2 pb-2">
                            <div class="flex items-center justify-center aspect-square w-10 sm:w-11 md:w-12 bg-white rounded-full">
                                <span class="text-gray-800 font-bold text-lg">A</span>
                            </div>
                            <span class="block text-white ml-6 sm:text-lg">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                        </div>
                        <ul class="py-2 sm:text-lg" aria-labelledby="user-menu-button">
                            <li>
                                <x-dropdown-link class="block px-8 py-3 text-white font-medium text-md" :href="route('profile.edit')">
                                    {{ __('Impostazioni') }}
                                </x-dropdown-link>
                            </li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link class="block px-8 py-3 font-medium text-md text-white" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Esci') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                const button = document.querySelector('#mobile-menu-button');
                const menu = document.querySelector('#mobile-menu');
                const menu_content = document.querySelector('#mobile-menu-content');
                const burger = document.querySelector('#burger-menu');
    
                button.addEventListener("click", () => {
                    menu.classList.toggle("dropdown-menu");
                    menu_content.classList.toggle("dropdown-menu-content");
                    burger.classList.toggle('toggle');
                });
            </script>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('analisiAziendale')" :active="request()->routeIs('analisiAziendale')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
