<x-app-layout>
    <section class="px-[7vw] py-[7vh] lg:px-[10vw]">
        {{-- barra di ricerca --}}
        <livewire:barra-di-ricerca/>
        {{-- output algoritmo --}}
        <!-- TradingView Widget END -->
        <div class="py-[5vh] mx-auto">
            @if($found == 1)
                <div class="flex flex-row items-center py-8">
                    <img class="aspect-square h-10" src="{{ route('company.logo', ['id' => $azienda->id, 'companyName' => $azienda->name]) }}">
                    <h2 class="text-5xl text-gray-800 font-bold uppercase w-fit ml-6">{{$azienda->name}}</h2>
                    {{-- <div class="flex justify-center items-center bg-gray-200 aspect-square rounded-full ml-8 h-10">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#0E5ECC" stroke-width="1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#0E5ECC" fill-rule="evenodd" d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z"></path> </g></svg>
                    </div> --}}
                </div>
                 <!-- Tab links -->
                <div id="tab" class="overflow-hidden border border-gray-300 inline-flex bg-white justify-center w-full text-gray-400 font-medium rounded-t-2xl px-6">
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex justify-center transition-all duration-100 opacity-50 hover:opacity-100 active" onclick="openCity(event, 'analisi-azionaria')">
                        <div class="rounded-xl bg-blue-100 w-10 h-10 p-2 sm:mr-4 md:w-12 md:h-12">
                            <img src="/img/azioni-tab-link.svg" alt="">
                        </div>
                        <h2 class="hidden sm:block">Analisi<br>Azionaria</h2>
                    </button>
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex justify-center transition-all duration-100 opacity-50 hover:opacity-100" onclick="openCity(event, 'analisi-aziendale')">
                        <div class="rounded-xl bg-blue-100 w-10 h-10 p-2 sm:mr-4 md:w-12 md:h-12">
                            <img src="/img/azienda-tab-link.svg" alt="">
                        </div>                        
                        <h2 class="hidden sm:block">Analisi<br>Aziendale</h2>
                    </button>
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex justify-center transition-all duration-100 opacity-50 hover:opacity-100" onclick="openCity(event, 'dati-finanziari')">
                        <div class="rounded-xl bg-blue-100 w-10 h-10 p-2 sm:mr-4 md:w-12 md:h-12">
                            <img src="/img/dati-tab-link.svg" alt="">
                        </div>
                        <h2 class="hidden sm:block">Dati<br>Finanziari</h2>
                    </button>
                </div>
                <!-- Tab content -->
                <div id="analisi-azionaria" class="tabcontent px-[5vw] py-14 border border-t-0 border-gray-300 rounded-b-2xl bg-white">
                    <!-- TradingView Widget BEGIN -->
                    <div class="mx-auto max-w-[1000px]">
                        <div id="tradingview_dceaf" class="h-[600px]"></div>
                        <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Segui tutti i mercati su TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "NASDAQ:"+"{{$azienda->symbol}}",
                                "interval": "W",
                                "timezone": "Etc/UTC",
                                "theme": "light",
                                "style": "2",
                                "locale": "it",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "withdateranges": true,
                                "allow_symbol_change": true,
                                "show_popup_button": true,
                                "popup_width": "1000",
                                "popup_height": "650",
                                "container_id": "tradingview_dceaf"
                            }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                
                <div id="analisi-aziendale" class="tabcontent hidden px-[5vw] py-14 border border-t-0 border-gray-300 rounded-b-2xl bg-white">
                    <div class="w-full">
                        <canvas id="roe-ros-chart"></canvas>
                    </div>
                    <script>
                        var roe = {{$azienda->roe}};
                        var ros = {{$azienda->ros}};
                        console.log(roe);
                        console.log(ros);
    
                        const ctx = document.getElementById('roe-ros-chart').getContext('2d');
                    </script>
                </div>
                
                <div id="dati-finanziari" class="tabcontent hidden px-[5vw] py-14 border border-t-0 border-gray-300 rounded-b-2xl bg-white">
                    <!-- TradingView Widget BEGIN -->
                    <div class="h-[800px]">
                    <div class=""></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                    {
                    "colorTheme": "light",
                    "isTransparent": false,
                    "largeChartUrl": "",
                    "displayMode": "adaptive",
                    "width": "100%",
                    "height": "100%",
                    "symbol": "NASDAQ:"+"{{$azienda->symbol}}",
                    "locale": "it"
                    }
                    </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Segui tutti i mercati su TradingView</span></a></div>
                <script>
                    function openCity(evt, cityName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                    } 
                </script>
                
            @else
                <div>
                    <h1 class="font-bold text-2xl text-center">NESSUNA AZIENDA CERCATA...</h1>
                    <p class="text-gray-600 text-sm text-center my-2">Cerca un'azienda utilizzando la barra di ricerca qui sopra.</p>
                    <div class="mt-20">
                        <img src="/img/search.svg" class="w-[50%] m-auto">
                    </div>
                </div>
            @endif
        </div>
    </section>
    @livewireScripts
</x-app-layout>