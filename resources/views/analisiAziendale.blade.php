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

                    <p class="text-gray-800 text-left pt-[20px] pb-[60px]">
                        L'analisi di redditività valuta l'efficienza con cui un'azienda genera profitti utilizzando i suoi mezzi finanziari e operativi.
                        Attraverso indicatori come ROE, ROI e ROS,ROA e ROD l'analisi di redditività fornisce un quadro della capacità dell'azienda di 
                        generare profitti rispetto ai suoi investimenti e alle sue operazioni , inoltre ci avvaliamo di indici come l'EBITDA che consente 
                        di misurare la performance finanziaria.
                    </p>
                    
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
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="ebitda-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var ebitda = {{$azienda->ebitda}};
                            </script>

                            {{-- grafico ebitda vendite vs debiti --}}
                            <div class="max-w-[800px] mx-auto pt-[50px]">
                                <canvas id="ebitdaVenditeDebiti-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var ebitda_debiti = {{$azienda->ebitda_debiti}};
                                var ebitda_vendite = {{$azienda->ebitda_vendite}};
                            </script>
    
                            {{-- commento grafico ebitda --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Nella prima parte dell'analisi, ci concentriamo sull'analisi dell'EBITDA classico, debiti e vendite, che valuta la 
                                            redditività operativa di un'azienda, escludendo gli effetti di interessi, imposte, ammortamenti e rivalutazioni. 
                                            L'EBITDA rapportato alle vendite indica la percentuale di guadagno operativo lordo rispetto al volume delle vendite,
                                             mentre l'EBITDA rapportato ai debiti valuta la capacità dell'azienda di coprire i suoi obblighi finanziari utilizzando 
                                             l'utile operativo lordo , nel detttaglio dell'azienda:
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // EBITDA
                                                if ($cont_ebitda > $MAX) {
                                                    echo($cont_ebitda);
                                                    echo "<br>";
                                                } else if ($cont_ebitda > $MIN && $cont_ebitda < $MAX) {
                                                    echo($cont_ebitda);
                                                    echo "<br>";
                                                } else if ($cont_ebitda < $MIN) {
                                                    echo($cont_ebitda);
                                                    echo "<br>";
                                                }
                                                echo "<br>";
                                                ///EBITDA_DEBITI
                                                if ($cont_ebitdaDebiti > $MAX) {
                                                    echo($cont_ebitdaDebiti);
                                                    echo "<br>";
                                                } else if ($cont_ebitda > $MIN && $cont_ebitdaDebiti < $MAX) {
                                                    echo($cont_ebitdaDebiti);
                                                    echo "<br>";
                                                } else if ($cont_ebitdaDebiti < $MIN) {
                                                    echo($cont_ebitdaDebiti);
                                                    echo "<br>";
                                                }
                                                echo "<br>";
                                                ///EBITDA_VENDITE
                                                if ($cont_ebitdaVendite > $MAX) {
                                                    echo($cont_ebitdaVendite);
                                                    echo "<br>";
                                                } else if ($cont_ebitdaVendite > $MIN && $cont_ebitdaVendite < $MAX) {
                                                    echo($cont_ebitdaVendite);
                                                    echo "<br>";
                                                } else if ($cont_ebitdaVendite < $MIN) {
                                                    echo($cont_ebitdaVendite);
                                                    echo "<br>";
                                                }
                                                // ROE e ROI
                                                if ($cont_roe > $MAX && $cont_roi < $MED) {
                                                    echo("12.1");
                                                    echo "<br>";
                                                } else if ($cont_roe < $MIN && $cont_roi > $MAX) {
                                                    echo("12.2");
                                                    echo "<br>";
                                                }

                                                // ROI e ROS
                                                if ($cont_roi > $MAX && $cont_ros < $MED) {
                                                   echo("13.1");
                                                   echo "<br>";
                                                } else if ($cont_roi < $MIN && $cont_ros > $MAX) {
                                                    echo("13.2");
                                                    echo "<br>";
                                                }

                                                // ROD e ROA
                                                if ($cont_rod > $MAX && $cont_roa < $MED) {
                                                    echo("14.1");
                                                    echo "<br>";
                                                } else if ($cont_rod < $MIN && $cont_roa > $MAX) {
                                                    echo("14.2");
                                                    echo "<br>";
                                                }

                                                // ROA e ROS
                                                if ($cont_roa > $MAX && $cont_ros < $MED) {
                                                    echo("15.1");
                                                    echo "<br>";
                                                } else if ($cont_roa < $MIN && $cont_ros > $MAX) {
                                                    echo("15.2");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2° analisi sugli indici di redditività singola --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-primary rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] text-white font-bold">2</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi sugli indici di redditività singola
                            </h3>
                        </div>
                        <p class="text-gray-800 text-left py-[10px] px-[7%]">
                            L'analisi combinata dei cinque indici finanziari - ROE , ROI , ROS, ROA e ROD fornisce una panoramica completa della performance 
                            finanziaria e operativa di un'azienda. Questa analisi consente di valutare l'efficienza nell'utilizzo di risorse finanziarie ed 
                            operative, la redditività generale dell'azienda e la gestione del debito, fornendo una visione integrata delle sue prestazioni e 
                            della sua solidità finanziaria. Fornendo dei parametri essenziali per prendere decisioni sull'investimento e sul miglioramento 
                            delle prestazioni aziendali.
                        </p>
                        
                        {{-- roe --}}
                        <div class="pt-[20px]">
                            <h3 class="font-bold leading-tight text-[24px]">Roe</h3>
                            {{-- grafico roe --}}
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="roe-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var roe = {{$azienda->roe}};
                            </script>
    
                            {{-- commento grafico roe --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Il ROE, o Ritorno sul Patrimonio Netto, misura la redditività dell'azienda rispetto agli investimenti degli azionisti. 
                                            Un ROE più alto indica una maggiore capacità dell'azienda di generare profitti con il capitale degli azionisti. 
                                            Tuttavia, va considerato insieme ad altri indicatori per una valutazione completa della performance aziendale.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // ROE
                                                if ($cont_roe > $MAX) {
                                                    echo("7.1");
                                                    echo "<br>";
                                                } else if ($cont_roe > $MIN && $cont_roe < $MAX) {
                                                    echo("7.2");
                                                    echo "<br>";
                                                } else if ($cont_roe < $MIN) {
                                                    echo("7.3");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- roi --}}
                        <div class="pt-[20px]">
                            <h3 class="font-bold leading-tight text-[24px]">Roi</h3>
                            {{-- grafico roi --}}
                            <div class="max-w-[800px] mx-auto">
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
                                            Il ROI, o Ritorno sugli Investimenti, è un indicatore finanziario che valuta l'efficienza di un investimento 
                                            confrontando il guadagno ottenuto con il costo dell'investimento stesso. Un ROI più elevato indica un investimento 
                                            più redditizio, mentre un ROI negativo indica una perdita. È uno strumento cruciale per valutare la redditività e 
                                            l'efficacia degli investimenti aziendali.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // ROI
                                                if ($cont_roi > $MAX) {
                                                    echo("8.1");
                                                    echo "<br>";
                                                } else if ($cont_roi > $MIN && $cont_roi < $MAX) {
                                                    echo("8.2");
                                                    echo "<br>";
                                                } else if ($cont_roi < $MIN) {
                                                    echo("8.3");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ros --}}
                        <div class="pt-[20px]">
                            <h3 class="font-bold leading-tight text-[24px]">Ros</h3>
                            {{-- grafico ros --}}
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="ros-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var ros = {{$azienda->ros}};
                            </script>
    
                            {{-- commento grafico roe --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Il ROS, o Margine Operativo Netto, misura la percentuale di guadagno operativo netto rispetto al fatturato 
                                            totale dell'azienda. È un indicatore della redditività operativa dell'azienda, indicando quanto margine l'azienda 
                                            riesce a mantenere dopo aver scontato i costi operativi.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // ROS
                                                if ($cont_ros > $MAX) {
                                                    echo("9.1");
                                                    echo "<br>";
                                                } else if ($cont_ros > $MIN && $cont_ros < $MAX) {
                                                    echo("9.2");
                                                    echo "<br>";
                                                } else if ($cont_ros < $MIN) {
                                                    echo("9.3");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- roa --}}
                        <div class="pt-[20px]">
                            <h3 class="font-bold leading-tight text-[24px]">Roa</h3>
                            {{-- grafico roa --}}
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="roa-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var roa = {{$azienda->roa}};
                            </script>
    
                            {{-- commento grafico roa --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Il ROA, o Ritorno sull'Attivo, è un indicatore finanziario che misura la redditività di un'azienda rispetto ai suoi 
                                            asset totali. Esso indica la capacità dell'azienda di generare profitti utilizzando gli asset a sua disposizione.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // ROA
                                                if ($cont_roa > $MAX) {
                                                    echo("10.1");
                                                    echo "<br>";
                                                } else if ($cont_roa > $MIN && $cont_roa < $MAX) {
                                                    echo("10.2");
                                                    echo "<br>";
                                                } else if ($cont_roa < $MIN) {
                                                    echo("10.3");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- rod --}}
                        <div class="pt-[20px]">
                            <h3 class="font-bold leading-tight text-[24px]">Rod</h3>
                            {{-- grafico rod --}}
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="rod-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var rod = {{$azienda->rod}};
                            </script>
    
                            {{-- commento grafico rod --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            Il ROD, o Ritorno sull'Investimento in Debito, è un indicatore finanziario che misura la redditività di un'azienda 
                                            rispetto al debito utilizzato per finanziare le sue operazioni. Esso indica la capacità dell'azienda di generare 
                                            profitti utilizzando il debito come fonte di finanziamento.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;

                                                // ROD
                                                if ($cont_rod > $MAX) {
                                                    echo("11.1");
                                                    echo "<br>";
                                                } else if ($cont_rod > $MIN && $cont_rod < $MAX) {
                                                    echo("11.2");
                                                    echo "<br>";
                                                } else if ($cont_rod < $MIN) {
                                                    echo("11.3");
                                                    echo "<br>";
                                                }
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3° analisi di redditività combinata --}}
                    <div class="mb-[50px]">
                        <div class="inline-flex items-center">
                            <div class="flex items-center justify-center bg-secondary rounded-full aspect-square w-[45px] mx-auto">
                                <span class="text-[18px] text-white font-bold">3</span>
                            </div>
                            <h3 class="ml-[16px] font-bold leading-tight text-[26px]">
                                Analisi di redditività combinata
                            </h3>
                        </div>
                        
                        {{-- indici --}}
                        <div class="pt-[20px]">
                            {{-- grafico indici --}}
                            <div class="max-w-[800px] mx-auto">
                                <canvas id="indici-redditivita-chart" class="w-full"></canvas>
                            </div>
                            <script>
                                var roe = {{$azienda->roe}};
                                var roi = {{$azienda->roi}};
                                var ros = {{$azienda->ros}};
                                var roa = {{$azienda->roa}};
                                var rod = {{$azienda->rod}};
                            </script>
    
                            {{-- commento grafico indici --}}
                            <div class="mt-[30px] mx-auto max-w-[800px]">
                                <div class="border border-b-0 border-gray-300 rounded-t-[20px]">
                                    <div class="px-[20px] py-[20px]">
                                        <h3 class="font-semibold text-[22px] mb-[6px]">
                                            Commento:
                                        </h3>
                                        <p class="text-gray-800 text-left">
                                            In questa sezione, esaminiamo la redditività attraverso una serie di combinazioni di indici , tra cui le seguenti  
                                            (ROE, ROI), (ROI, ROS), (ROD, ROA), (ROA, ROS).Questi indici forniscono una panoramica completa della performance 
                                            finanziaria, consentendo una valutazione approfondita dell'efficacia aziendale nell'utilizzo delle risorse.
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
                                                $MAX = 12.3;
                                                $MIN = 3.7;
                                                $MED = 8;
                                                
                                                $f = 0;

                                                if ($cont_roe > $MED && $cont_roi < $MED) {
                                                    echo("12.1");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else if ($cont_roe < $MIN && $cont_roi > $MAX) {
                                                    echo("12.2");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else {
                                                    $f++;
                                                }

                                                // (roi,ros)
                                                if ($cont_roi > $MED && $cont_ros < $MED) {
                                                   echo("13.1");
                                                   echo "<br>";
                                                   $f = 0;
                                                } else if ($cont_roi < $MIN && $cont_ros > $MAX) {
                                                    echo("13.2");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else {
                                                    $f++;
                                                }

                                                // (rod,roa)
                                                if ($cont_rod > $MED && $cont_roa < $MED) {
                                                    echo("14.1");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else if ($cont_rod < $MIN && $cont_roa > $MAX) {
                                                    echo("14.2");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else {
                                                    $f++;
                                                }

                                                // (roa,ros)
                                                if ($cont_roa > $MED && $cont_ros < $MED) {
                                                    echo("15.1");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else if ($cont_roa < $MIN && $cont_ros > $MAX) {
                                                    echo("15.2");
                                                    echo "<br>";
                                                    $f = 0;
                                                } else if ($f > 0) {
                                                    echo "Non sono presenti delle variazioni sensibili che consentono di determinare l'andamento di un indice rispetto all'altro";
                                                    echo "<br>";
                                                }
                                            @endphp
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