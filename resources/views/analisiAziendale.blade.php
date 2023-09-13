<x-app-layout>
    <section class="py-[40px] lg:px-[10vw]">

        {{-- barra di ricerca --}}
        <div class="px-[7vw]">
            <livewire:barra-di-ricerca/>
        </div>

        {{-- output algoritmo --}}
        <div class="mx-auto mt-[60px]">
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
                        <h3 class="hidden leading-tight sm:block">Prezzo<br>di Mercato</h3>
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
                {{-- prezzo di mercato --}}
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
                    
                    {{-- 1° analisi della redditività --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-gray-300 rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] font-bold">1</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi della Redditività
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
                                            Nel primo passo dell'analisi, si valuta la redditività dell'azienda, concentrandosi sull'efficacia 
                                            con cui il capitale proprio viene utilizzato per generare ricchezza, misurato tramite il ROE 
                                            (Return on Equity).
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
                                            In questo caso, l'azienda mostra un andamento della redditività sul capitale proprio che può essere descritto 
                                            come (non molto positivo/positivo/molto positivo). Ciò significa che l'utile, considerando tutte le fonti di 
                                            reddito e rapportandolo al capitale investito dagli stakeholder, è (leggermente basso/basso/molto basso). 
                                            Questa informazione è preziosa per gli stakeholder esterni all'azienda, poiché aiuta a valutare se un potenziale 
                                            investimento nell'azienda potrebbe essere redditizio o meno. La somma possibile da investire corrisponderà al capitale 
                                            proprio dell'azienda, ovvero il capitale fornito dagli azionisti e dai finanziatori.<br>
                                            Nel corso degli anni, non si nota mai un superamento della soglia del 7% per l'indice ROS (Return on Sales). 
                                            Questo indica che la redditività del capitale proprio è rimasta bassa a causa di una scarsa capacità dell'azienda 
                                            di convertire il fatturato in profitti effettivi. In altre parole, i costi di gestione sembrano assorbire una parte 
                                            eccessiva del fatturato, riducendo così il ROE (Return on Equity).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- gestione non caratterisitica --}}
                        <div class="pt-[50px]">
                            <div class="w-full mb-[20px]">
                                <h3 class="w-full font-bold text-[22px] leading-snug">
                                    Gestione non caratteristica
                                </h3>
                            </div>

                            {{-- grafico gestione non caratteristica --}}
                            <div class="w-full max-w-[1000px]">
                                <canvas id="gnc-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var utile = {{$azienda->utile}};
                                var ignc = {{$azienda->incidenza_gestione_nn_caratteristica}};
                            </script>

                            {{-- commento gestione non carattersitica --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Va evidenziato che negli anni considerati, l'utile conseguito è stato particolarmente influenzato da elementi 
                                            positivi di reddito che non derivano dalla gestione caratteristica o dal "core business" dell'azienda. 
                                            Questi elementi potrebbero includere entrate straordinarie, guadagni derivanti da vendite di asset non ricorrenti 
                                            o altre fonti non tipiche dell'attività principale dell'azienda.
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
                                            È importante notare che tali fonti di reddito non sono prevedibili e potrebbero non ripetersi positivamente 
                                            negli anni futuri. Pertanto, l'utile risultante da questi elementi atipici potrebbe essere meno stabile e meno 
                                            rappresentativo della reale situazione dell'azienda nel lungo termine. Al contrario, l'utile derivante dalla gestione 
                                            caratteristica o dal core business dell'azienda tende ad essere più stabile nel tempo e fornisce una visione più 
                                            oggettiva delle prestazioni reali dell'azienda. Questi utili riflettono le operazioni ricorrenti dell'azienda e sono 
                                            indicativi della sua capacità di generare profitti nel lungo periodo. Pertanto, nell'analisi della redditività 
                                            dell'azienda, è fondamentale distinguere tra gli elementi di reddito che derivano dalle attività principali dell'azienda 
                                            e quelli che possono essere considerati come eventi eccezionali o non ricorrenti. Questo permette agli investitori 
                                            di ottenere una visione più accurata e affidabile della salute finanziaria e delle prospettive future dell'azienda.
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
                        
                        {{-- roi --}}
                        <div class="pt-[20px]">
                            {{-- grafico roi --}}
                            <div class="max-w-[1000px] mx-auto">
                                <canvas id="roi-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var roi = {{$azienda->roi}};
                            </script>
    
                            {{-- commento grafico roi --}}
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