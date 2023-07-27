<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShareBy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-main bg-secondary">
        {{-- navbar --}}
        <nav class="w-full bg-secondary py-4 px-6">
            <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto">
                {{-- logo --}}
                <a href="{{ url('/')}}" class="flex">
                    <img class="h-[3rem]" src="/img/logo_shareBy_white.svg" alt="ShareBy Logo">
                </a>
                {{-- desktop navigation menu --}}
                <div class="hidden md:flex w-[50%] font-medium text-lg flex-row justify-evenly items-center">
                    <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="/">Home</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="{{ url('/prodotti') }}">Servizi</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100"href="{{ url('/chiSiamo')}}">Chi Siamo</a>
                </div>
                {{-- menu --}}
                <div class="flex items-center sm:pt-0 md:order-2">
                    @if (Route::has('login'))
                        @auth
                        {{-- desktop user menu --}}
                        <button type="button" class="hidden md:flex aspect-square w-10 mr-3 rounded-full md:mr-0 md:w-11 hover:scale-110 hover:border-4 border-white transition-all duration-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <div class="flex items-center justify-center aspect-square w-10 md:w-11 bg-gray-300 rounded-full">
                                <span class="text-gray-800 font-bold text-lg">A</span>
                            </div>
                        </button>
                        {{-- dropdown desktop user menu --}}
                        <div id="user-dropdown" class="h-[0vh] absolute overflow-hidden right-0 w-min top-20 bg-gray-100 rounded-xl mr-4 transition-all duration-1000 ease-[cubic-bezier(.215, .61, .355, 1)] sm:mx-6">
                            <div id="user-dropdown-content" class="opacity-0 transition-all duration-1000 ease-in-out">
                                <div class="px-4 py-3">
                                    <span class="block text-md text-gray-900">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                    <span class="block text-sm  text-gray-500 truncate">{{ Auth::user()->email }}</span>
                                </div>
                                <hr class="rounded border-gray-300">
                                <ul class="py-2 px-2 text-md" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="{{ url('/dashboard') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Dashboard</a>
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
                        {{-- bottoni accedi e registrati mostrati in formato desktop nel caso l'utente non abbia fatto l'accesso --}}  
                            @else
                            <div class="hidden md:flex">
                                <a href="{{ route('login') }}" class="mr-3">
                                    <x-primary-button class="bg-secondary px-3 py-2 border-2 border-white text-md hover:text-secondary hover:bg-white">Accedi</x-primary-button>
                                </a>
                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <x-primary-button class="bg-primary px-3 py-2 border-2 border-white text-md hover:text-secondary hover:bg-white">Registrati</x-primary-button>
                                        </a>
                                @endif
                            </div>
                            @endauth
                    @endif
                    {{-- mobile menu --}}
                    <button id="mobile-menu-button" class="md:hidden" data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 aspect-square w-10 sm:w-11 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:scale-110 transition-all duration-300" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <div id="burger-menu" class="aspect-square w-10 sm:w-11 p-1">
                            <div id="line1" class="w-full h-[5px] bg-white rounded-xl my-[5px] transition-all duration-300 ease-in-out"></div>
                            <div id="line2" class="w-full h-[5px] bg-white rounded-xl my-[5px] transition-all duration-300 ease-in-out"></div>
                            <div id="line3" class="w-full h-[5px] bg-white rounded-xl my-[5px] transition-all duration-300 ease-in-out"></div>
                        </div>
                    </button>
                    {{-- dropdown mobile menu --}}
                    <div id="mobile-menu" class="h-[0vh] absolute left-0 right-0 mx-auto w-full top-[80px] bg-secondary overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                        <div id="mobile-menu-content" class="h-full flex flex-col justify-between p-4 opacity-0 transition-all duration-1000 ease-in-out">
                            <ul class="font-regular text-xl text-white">
                                <li>
                                    <a href="{{ url('/')}}" class="flex py-4 rounded-xl font-medium">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/prodotti')}}" class="flex py-4 rounded-xl font-medium">Servizi</a>
                                </li>
                                <li>
                                    <a href="{{ url('/chiSiamo')}}" class="flex py-4 rounded-xl font-medium">Chi Siamo</a>
                                </li>
                            </ul>
                            {{-- parte di registrazione del menu --}}
                            <div class="flex flex-row">
                                @if (Route::has('login'))
                                {{-- se è loggato --}}
                                    @auth
                                        <div class="pb-20">
                                            <h1 class="text-white text-3xl font-bold pb-4">Account</h1>
                                            <div class="flex items-center pl-2 pb-2">
                                                <div class="flex items-center justify-center aspect-square w-10 sm:w-11 md:w-12 bg-white rounded-full">
                                                    <span class="text-gray-800 font-bold text-lg">A</span>
                                                </div>
                                                <span class="block text-white ml-6 sm:text-lg">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                            </div>
                                            <ul class="py-2 sm:text-lg" aria-labelledby="user-menu-button">
                                                <li>
                                                    <a href="{{ url('/dashboard') }}" class="block px-8 py-3 font-medium text-md text-white">Dashboard</a>
                                                </li>
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
                                    @else
                                    {{-- se non è loggato --}}
                                    <div class="w-full flex flex-row items-center justify-center gap-4">
                                        <a href="{{ route('login') }}">
                                            <x-primary-button class="bg-secondary px-3 py-2 border-2 border-white text-lg hover:text-secondary hover:bg-white">Accedi</x-primary-button>
                                        </a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <x-primary-button class="bg-primary px-3 py-2 border-2 border-white text-lg hover:text-secondary hover:bg-white">Registrati</x-primary-button>
                                        </a>
                                        @endif
                                    </div>                                        
                                    @endauth
                                @endif
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
            </div>
        </nav>

        <main class="bg-white">

            @yield('content')

            {{-- fade in script --}}
            <script>
                // elements
                var elements_to_watch = document.querySelectorAll('.watch');

                // callback
                var callback = function(items){
                    items.forEach((item) => {
                        if (item.isIntersecting) {
                            item.target.classList.add('in-page');
                        }else{
                            item.target.classList.remove('in-page');
                        }
                    });
                }

                // observer
                var observer = new IntersectionObserver (callback, { threshold: 0.7 });

                // apply
                elements_to_watch.forEach((element) => {
                    observer.observe(element);
                });
            </script>
            
        </main>
        {{-- footer --}}
        <footer class="bg-secondary">
            <div class="mx-auto w-full max-w-screen-xl px-10 py-8">
                <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo_shareBy_white.svg" class="h-16 mr-3" alt="ShareBy Logo" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Azienda</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ url('/chiSiamo')}}" class="hover:underline">Chi Siamo</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ url('/chiSiamo')}}" class="hover:underline">Contatti</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Lavora con noi</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Servizi</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ url('/prodotti')}}" class="hover:underline ">Analisi Aziendale</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ url('/prodotti')}}" class="hover:underline">ShareBYOU</a>
                            </li>
                            <li>
                                <a href="{{ url('/prodotti')}}" class="hover:underline">Consultant AI</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Termini e Condizioni</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">ShareBy™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
            </div>
        </footer>
    </body>
</html>