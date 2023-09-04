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
                <button id="user-menu-button" class="xl:hidden inline-flex items-center px-3 text-sm leading-4 font-medium text-white focus:outline-none transition ease-in-out duration-150">
                    <img class="aspect-square w-[24px] hover:scale-105 transition-all duration-300 ease-in-out" src="/img/profile.svg" alt="">
                </button>
                {{-- dropdown desktop user menu --}}
                <div id="user-dropdown" class="opacity-0 h-[0vh] absolute overflow-hidden right-0 w-min top-[70px] bg-gray-700 rounded-xl mr-4 transition-all duration-1000 ease-[cubic-bezier(.215, .61, .355, 1)] sm:mx-6">
                    <div id="user-dropdown-content" class="p-[10px] transition-all duration-1000 ease-in-out">
                        <div class="xl:hidden">
                            <span class="block text-md text-gray-200">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                            <span class="block text-sm  text-gray-300 truncate">{{ Auth::user()->email }}</span>
                        </div>
                        <hr class="rounded border-gray-100 my-[5px] xl:hidden">
                        <div class="text-md text-gray-100 p-[10px] xl:p-0" aria-labelledby="user-menu-button">
                            <div class="flex items-center mb-[10px]">
                                <svg width="32px" height="32px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.5 11.75C12.9142 11.75 13.25 11.4142 13.25 11C13.25 10.5858 12.9142 10.25 12.5 10.25V11.75ZM5.5 10.25C5.08579 10.25 4.75 10.5858 4.75 11C4.75 11.4142 5.08579 11.75 5.5 11.75V10.25ZM12.5 10.25C12.0858 10.25 11.75 10.5858 11.75 11C11.75 11.4142 12.0858 11.75 12.5 11.75V10.25ZM19.5 11.75C19.9142 11.75 20.25 11.4142 20.25 11C20.25 10.5858 19.9142 10.25 19.5 10.25V11.75ZM11.75 11C11.75 11.4142 12.0858 11.75 12.5 11.75C12.9142 11.75 13.25 11.4142 13.25 11H11.75ZM13.25 5C13.25 4.58579 12.9142 4.25 12.5 4.25C12.0858 4.25 11.75 4.58579 11.75 5H13.25ZM6.25 11C6.25 10.5858 5.91421 10.25 5.5 10.25C5.08579 10.25 4.75 10.5858 4.75 11H6.25ZM20.25 11C20.25 10.5858 19.9142 10.25 19.5 10.25C19.0858 10.25 18.75 10.5858 18.75 11H20.25ZM4.75 11C4.75 11.4142 5.08579 11.75 5.5 11.75C5.91421 11.75 6.25 11.4142 6.25 11H4.75ZM12.5 5.75C12.9142 5.75 13.25 5.41421 13.25 5C13.25 4.58579 12.9142 4.25 12.5 4.25V5.75ZM18.75 11C18.75 11.4142 19.0858 11.75 19.5 11.75C19.9142 11.75 20.25 11.4142 20.25 11H18.75ZM12.5 4.25C12.0858 4.25 11.75 4.58579 11.75 5C11.75 5.41421 12.0858 5.75 12.5 5.75V4.25ZM12.5 10.25H5.5V11.75H12.5V10.25ZM12.5 11.75H19.5V10.25H12.5V11.75ZM13.25 11V5H11.75V11H13.25ZM4.75 11V15H6.25V11H4.75ZM4.75 15C4.75 17.6234 6.87665 19.75 9.5 19.75V18.25C7.70507 18.25 6.25 16.7949 6.25 15H4.75ZM9.5 19.75H15.5V18.25H9.5V19.75ZM15.5 19.75C18.1234 19.75 20.25 17.6234 20.25 15H18.75C18.75 16.7949 17.2949 18.25 15.5 18.25V19.75ZM20.25 15V11H18.75V15H20.25ZM6.25 11V9H4.75V11H6.25ZM6.25 9C6.25 7.20507 7.70507 5.75 9.5 5.75V4.25C6.87665 4.25 4.75 6.37665 4.75 9H6.25ZM9.5 5.75H12.5V4.25H9.5V5.75ZM20.25 11V9H18.75V11H20.25ZM20.25 9C20.25 6.37665 18.1234 4.25 15.5 4.25V5.75C17.2949 5.75 18.75 7.20507 18.75 9H20.25ZM15.5 4.25H12.5V5.75H15.5V4.25Z" fill="#ffff"></path> </g></svg>
                                <a href="{{ url('/dashboard') }}" class="block ml-[5px]">Dashboard</a>
                            </div>
                            <div class="flex items-center mb-[10px]">
                                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.464"></circle> <path d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z" stroke="#ffffff" stroke-width="1.464"></path> </g></svg>
                                <x-dropdown-link class="block ml-[10px]" :href="route('profile.edit')">
                                    {{ __('Impostazioni') }}
                                </x-dropdown-link>
                            </div>
                            <div class="flex items-center">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#DC2626" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                                {{-- Authentication --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link class="block ml-[10px]" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Esci') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
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

                {{-- desktop xl user menu --}}
                <div class="hidden xl:flex items-center justify-center gap-[20px]">
                    <a href="{{ url('/dashboard') }}">
                        <span class="block text-[16px] text-gray-100 hover:underline">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                    </a>
                    <a href="{{ route('profile.edit') }}" class="hover:scale-105 transition-all duration-300">
                        <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.464"></circle> <path d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z" stroke="#ffffff" stroke-width="1.464"></path> </g></svg>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-[28px] h-[28px]">
                        @csrf
                        <button class="hover:scale-105 transition-all duration-300" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#DC2626" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                        </button>
                    </form>
                </div>
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
