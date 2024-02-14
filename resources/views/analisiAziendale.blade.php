<x-app-layout>
    <section class="py-[40px] lg:px-[10vw]">

        {{-- barra di ricerca --}}
        <div class="px-[7vw]">
            <livewire:barra-di-ricerca/>
        </div>

        {{-- output algoritmo --}}
        <div class="mx-auto mt-[30px]">
            @if($found == 1)
                <div class="flex flex-row items-center pt-[40px] pb-[24px] px-[5vw]">
                    <img class="aspect-square h-10" src="{{ route('company.logo', ['id' => $azienda->id, 'companyName' => $azienda->name]) }}">
                    <h3 class="text-gray-800 font-bold uppercase w-fit ml-[24px] text-[28px]">{{$azienda->name}}</h3>
                </div>

                 <!-- Tab links -->
                <div id="tab" class="overflow-hidden border border-gray-300 inline-flex bg-white justify-center w-full text-gray-400 font-medium rounded-t-2xl px-6">
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex items-center justify-center transition-all duration-100 opacity-50 hover:opacity-100 active" onclick="openTab(event, 'prezzo-mercato')">
                        <div class="rounded-xl bg-blue-100 aspect-square w-[36px] p-2 sm:mr-4 md:w-[42px]">
                            <img src="/img/azioni-tab-link.svg" alt="">
                        </div>
                        <h3 class="hidden leading-tight sm:block">Quotazioni<br>di Mercato</h3>
                    </button>
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex items-center justify-center transition-all duration-100 opacity-50 hover:opacity-100" onclick="openTab(event, 'analisi-aziendale')">
                        <div class="rounded-xl bg-blue-100 aspect-square w-[36px] p-2 sm:mr-4 md:w-[42px]">
                            <img src="/img/azienda-tab-link.svg" alt="">
                        </div>                        
                        <h3 class="hidden leading-tight sm:block">Analisi<br>Aziendale</h3>
                    </button>
                    <button class="tablinks basis-1/3 py-4 md:py-5 inline-flex items-center justify-center transition-all duration-100 opacity-50 hover:opacity-100" onclick="openTab(event, 'dati-finanziari')">
                        <div class="rounded-xl bg-blue-100 aspect-square w-[36px] p-2 sm:mr-4 md:w-[42px]">
                            <img src="/img/dati-tab-link.svg" alt="">
                        </div>
                        <h3 class="hidden leading-tight sm:block">Dati<br>Finanziari</h3>
                    </button>
                </div>

                <!-- Tab content -->
                {{-- quotazioni di mercato --}}
                <div id="prezzo-mercato" class="tabcontent px-[5vw] py-[30px] border border-t-0 border-gray-300 rounded-b-2xl bg-white">
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
                
                {{-- analisi aziendale --}}
                <div id="analisi-aziendale" class="tabcontent hidden px-[5vw] py-[30px] border border-t-0 border-gray-300 rounded-b-2xl bg-white">
                    
                    {{-- 1° analisi dell'EBITDA --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-gray-300 rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] font-bold">1</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi EBITDA
                            </h3>
                        </div>
                        
                        {{-- ebitda --}}
                        <div class="pt-[20px]">
                            {{-- grafico ebitda --}}
                            <div class="max-w-[1000px] mx-auto">
                                <canvas id="ebitda-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var ebitda = {{$azienda->ebitda}};
                            </script>
    
                            {{-- commento grafico ebitda --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            L'analisi di redditività valuta l'efficacia di un'azienda nel generare profitti da investimenti e attività 
                                            operative, utilizzando indicatori finanziari chiave come ROE, ROI ed EBITDA, riteniamo quest’analisi 
                                            la più solida da cui partire per valutare le prospettive future di un azienda.
                                        </p>
                                    </div>
                                </div>
                                <div id="faq" class="w-full border border-gray-300 rounded-b-[20px] cursor-pointer py-5 px-[20px]">
                                    <div id="question" class="flex justify-between items-center">
                                        <h3 class="font-medium">
                                            Scopri di più
                                        </h3>
                                        <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                                            <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                                            <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                                        </div>
                                    </div>
                                    <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                                        <p class="text-left py-5 text-gray-800">
                                            @php
                                                echo($cont_ebitda);
                                                echo "<br>";
                                                echo($cont_ebitdaDebiti);
                                                echo "<br>";
                                                echo($cont_ebitdaVendite);
                                                echo "<br>";
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // EBITDA
                                                if ($cont_ebitda > $MAX) {
                                                    printf("\n%f\n", $cont_ebitda);
                                                } else if ($cont_ebitda > $MIN && $cont_ebitda < $MAX) {
                                                    printf("\n%f\n", $cont_ebitda);
                                                } else if ($cont_ebitda < $MIN) {
                                                    printf("\n%f\n", $cont_ebitda);
                                                }
                                                echo "<br>";
                                                ///EBITDA_DEBITI
                                                if ($cont_ebitdaDebiti > $MAX) {
                                                    printf("\n%f\n", $cont_ebitdaDebiti);
                                                } else if ($cont_ebitda > $MIN && $cont_ebitdaDebiti < $MAX) {
                                                    printf("\n%f\n", $cont_ebitdaDebiti);
                                                } else if ($cont_ebitdaDebiti < $MIN) {
                                                    printf("\n%f\n", $cont_ebitdaDebiti);
                                                }
                                                echo "<br>";
                                                ///EBITDA_VENDITE
                                                if ($cont_ebitdaVendite > $MAX) {
                                                    printf("\n%f\n", $cont_ebitdaVendite);
                                                } else if ($cont_ebitdaVendite > $MIN && $cont_ebitdaVendite < $MAX) {
                                                    printf("\n%f\n", $cont_ebitdaVendite);
                                                } else if ($cont_ebitdaVendite < $MIN) {
                                                    printf("\n%f\n", $cont_ebitdaVendite);
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2° analisi della struttura patrimoniale --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-primary rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] text-white font-bold">2</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi della struttura patrimoniale
                            </h3>
                        </div>
                        
                        {{-- roe e ros --}}
                        <div class="pt-[20px]">
                            {{-- grafico roe e ros --}}
                            <div class="max-w-[1000px] mx-auto">
                                <canvas id="roe-ros-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var roe = {{$azienda->roe}};
                                var ros = {{$azienda->ros}};
                            </script>
    
                            {{-- commento grafico roe e ros --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            L'analisi di redditività valuta l'efficacia di un'azienda nel generare profitti da investimenti e attività 
                                            operative, utilizzando indicatori finanziari chiave come ROE, ROI ed EBITDA, riteniamo quest’analisi 
                                            la più solida da cui partire per valutare le prospettive future di un azienda.
                                        </p>
                                    </div>
                                </div>
                                <div id="faq" class="w-full border border-gray-300 rounded-b-[20px] cursor-pointer py-5 px-[20px]">
                                    <div id="question" class="flex justify-between items-center">
                                        <h3 class="font-medium">
                                            Scopri di più
                                        </h3>
                                        <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                                            <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                                            <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                                        </div>
                                    </div>
                                    <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                                        <p class="text-left py-5 text-gray-800">
                                            @php
                                                echo($cont_ebitda);
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3° analisi sull'indebitamento --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-secondary rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] text-white font-bold">3</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi sull'indebitamento
                            </h3>
                        </div>
                        
                        {{-- leverage --}}
                        <div class="pt-[20px]">
                            {{-- grafico leverage --}}
                            <div class="max-w-[1000px] mx-auto">
                                <canvas id="leverage-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var leverage = {{$azienda->leverage}};
                            </script>
    
                            {{-- commento grafico leverage --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Viene indicato, tramite l’utilizzo del ROI (Return On Investment) che la redditività sul capitale investito 
                                            ha un andamento negativo, ciò vuol dire che negli anni considerati l’azienda ha generato una capacità di produrre 
                                            utile prodotto esclusivamente dal suo “core business” (bassa) rispetto al volume delle immobilizzazioni dell’azienda."
                                        </p>
                                    </div>
                                </div>
                                <div id="faq" class="w-full border border-gray-300 rounded-b-[20px] cursor-pointer py-5 px-[20px]">
                                    <div id="question" class="flex justify-between items-center">
                                        <h3 class="font-medium">
                                            Scopri di più
                                        </h3>
                                        <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                                            <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                                            <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                                        </div>
                                    </div>
                                    <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                                        <p class="text-left py-5 text-gray-800">
                                            In oltre negli anni (2020-2022) tramite l’indice di rotazione degli impieghi si evidenzia che il fatturato 
                                            dell’impresa considerate le immobilizzazioni ha un andamento negativo in misura che esso non riesce a coprire 
                                            neanche una volta gli impieghi. Questo dato ci permette di ipotizzare che l’andamento negativo (basso) della 
                                            redditività può derivare da una scarsa capacità dell’azienda nel generare ricchezza dalle vendite.<br>
                                            Viene specificato l’anno 2019 come l’anno peggiore e l’anno 2021 come anno migliore, in totale sui 5 anni mantene 
                                            una media di roi di 0.78.
                                        </p>
                                    </div>
                                </div>
                                <script>
                                    const faqs = document.querySelectorAll('#faq');
                        
                                    faqs.forEach(faq => {
                                        faq.addEventListener("click", () => {
                                            faq.classList.toggle('active');
                                        })
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    {{-- script per commento a scomparsa --}}
                    <script>
                        const faqs = document.querySelectorAll('#faq');
            
                        faqs.forEach(faq => {
                            faq.addEventListener("click", () => {
                                faq.classList.toggle('active');
                            })
                        });
                    </script>
                </div>
                
                {{-- dati finanziari --}}
                <div id="dati-finanziari" class="tabcontent hidden px-[5vw] py-14 border border-t-0 border-gray-300 rounded-b-2xl bg-white">
                    <div class="min-w-[240px] mx-auto h-[500px]">
                        <!-- TradingView Widget BEGIN -->
                            <div class=""></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                            {
                            "colorTheme": "light",
                            "isTransparent": false,
                            "largeChartUrl": "",
                            "displayMode": "adaptive",
                            "width": "100%",
                            "height": "100%",
                            "symbol": "NASDAQ:{{$azienda->symbol}}",
                            "locale": "it"
                            }
                            </script>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                
                {{-- tab script --}}
                <script>
                    function openTab(evt, tabName) {
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
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.className += " active";
                    } 
                </script>
                
            @else
                {{-- vista quando non si ha cercato ancora un'azienda --}}
                <div>
                    <h3 class="font-bold text-2xl text-center">NESSUNA AZIENDA CERCATA...</h3>
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