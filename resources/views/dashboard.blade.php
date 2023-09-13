<x-app-layout>
    <section class="w-full">
        <!-- TradingView Widget BEGIN -->
        <div class="mx-auto">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
            {
                "description": "Intesa San Paolo",
                "proName": "MIL:ISP"
            },
            {
                "description": "Enel",
                "proName": "MIL:ENEL"
            },
            {
                "description": "Unicredit",
                "proName": "MIL:UCG"
            },
            {
                "description": "Eni",
                "proName": "MIL:ENI"
            },
            {
                "description": "Stellantis",
                "proName": "MIL:STLAM"
            },
            {
                "description": "Ferrari",
                "proName": "MIL:RACE"
            },
            {
                "description": "Telecom Italia",
                "proName": "MIL:TIT"
            }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "it"
            }
            </script>
        </div>
        <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Segui tutti i mercati su TradingView</span></a></div>

        {{-- widgets dashboard --}}
        <div class="px-[20px] py-[40px] max-w-[1000px] mx-auto">
            <div class="w-full mb-[20px] md:mb-[30px]">
                <h2 class="text-left text-secondary">Dashboard:</h2>
            </div>
            <div class="flex flex-col justify-center items-center gap-[15px] mx-auto md:grid grid-cols-6">
                {{-- uno sguardo globale --}}
                <div class="col-span-3 rounded-[20px] bg-white border border-gray-300 px-[15px] py-[20px] min-w-[290px] max-w-[480px] mx-auto sm:px-[40px] sm:py-[40px]">
                    <div class="mb-[25px]">
                        <div class="inline-flex items-center w-fit">
                            <svg width="42px" height="42px" viewBox="0 0 25.00 25.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.5 16.5H19.5M5.5 8.5H19.5M4.5 12.5H20.5M12.5 20.5C12.5 20.5 8 18.5 8 12.5C8 6.5 12.5 4.5 12.5 4.5M12.5 4.5C12.5 4.5 17 6.5 17 12.5C17 18.5 12.5 20.5 12.5 20.5M12.5 4.5V20.5M20.5 12.5C20.5 16.9183 16.9183 20.5 12.5 20.5C8.08172 20.5 4.5 16.9183 4.5 12.5C4.5 8.08172 8.08172 4.5 12.5 4.5C16.9183 4.5 20.5 8.08172 20.5 12.5Z" stroke="#000000" stroke-width="1.2"></path> </g></svg>
                            <h3 class="text-[22px] font-bold ml-[5px]">Uno sguardo globale</h3>
                        </div>
                        <p class="text-left ml-[10px]">
                            Costruito per dare una panoramica ai mercati globali.
                        </p>
                    </div>
                    <div class="min-w-[240px] mx-auto h-[500px]">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Segui tutti i mercati su TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "it",
                                "width": "100%",
                                "height": "100%",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(42, 46, 57, 0)",
                                "scaleFontColor": "rgba(134, 137, 147, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                "tabs": [
                                {
                                    "title": "Indici",
                                    "symbols": [
                                    {
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "FOREXCOM:NSXUSD",
                                        "d": "US 100"
                                    },
                                    {
                                        "s": "INDEX:DEU40",
                                        "d": "DAX Index"
                                    },
                                    {
                                        "s": "FOREXCOM:UKXGBP",
                                        "d": "UK 100"
                                    }
                                    ],
                                    "originalTitle": "Indices"
                                }
                                ]
                            }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                    </div>
                </div>

                {{-- Il meglio del mercato --}}
                <div class="col-span-3 rounded-[20px] bg-white border border-gray-300 px-[15px] py-[20px] min-w-[290px] max-w-[480px] mx-auto sm:px-[40px] sm:py-[40px]">
                    <div class="mb-[25px]">
                        <div class="inline-flex items-center w-fit">
                            <svg fill="#000000" width="42px" height="42px" viewBox="0 0 24 24" id="up-trend-left-round" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M21,17l-5.79-5.79a1,1,0,0,0-1.42,0l-2.58,2.58a1,1,0,0,1-1.42,0L3,7" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><polyline id="primary-2" data-name="primary" points="7 7 3 7 3 11" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline></g></svg>
                            <h3 class="text-[22px] font-bold ml-[5px]">Il meglio del mercato</h3>
                        </div>
                        <p class="text-left ml-[10px]">
                            Costruito per dare una panoramica ai mercati globali.
                        </p>
                    </div>
                    <div class="min-w-[240px] mx-auto h-[500px]">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://it.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Segui tutti i mercati su TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "it",
                                "width": "100%",
                                "height": "100%",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(42, 46, 57, 0)",
                                "scaleFontColor": "rgba(134, 137, 147, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                "tabs": [
                                {
                                    "title": "Indici",
                                    "symbols": [
                                    {
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "FOREXCOM:NSXUSD",
                                        "d": "US 100"
                                    },
                                    {
                                        "s": "INDEX:DEU40",
                                        "d": "DAX Index"
                                    },
                                    {
                                        "s": "FOREXCOM:UKXGBP",
                                        "d": "UK 100"
                                    }
                                    ],
                                    "originalTitle": "Indices"
                                }
                                ]
                            }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                    </div>
                </div>

                {{-- aziende preferite --}}
                <div class="col-span-2 rounded-[20px] bg-white border border-gray-300 p-[30px] w-full mx-auto sm:p-[40px]">
                    <div class="mb-[25px]">
                        <div class="inline-flex items-center w-fit">
                            <svg width="38px" height="38px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <h3 class="text-[22px] font-bold ml-[5px]">Preferite</h3>
                        </div>
                        <div class="flex flex-col text-gray-800 text-[16px] font-medium w-full ml-[10px] leading-[30px]">
                            <span class="">Microsoft</span>
                            <span class="">Microsoft</span>
                            <span class="">Microsoft</span>
                            <span class="">Microsoft</span>
                        </div>
                    </div>
                </div>

                {{-- aziende preferite --}}
                <div class="col-span-4 rounded-[20px] bg-white border border-gray-300 p-[30px] w-full mx-auto sm:p-[40px]">
                    <div class="mb-[25px]">
                        <div class="inline-flex items-center w-fit">
                            <svg width="42px" height="42px" viewBox="-2.4 -2.4 52.80 52.80" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M31.278,25.525C34.144,23.332,36,19.887,36,16c0-6.627-5.373-12-12-12c-6.627,0-12,5.373-12,12 c0,3.887,1.856,7.332,4.722,9.525C9.84,28.531,5,35.665,5,44h38C43,35.665,38.16,28.531,31.278,25.525z M16,16c0-4.411,3.589-8,8-8 s8,3.589,8,8c0,4.411-3.589,8-8,8S16,20.411,16,16z M24,28c6.977,0,12.856,5.107,14.525,12H9.475C11.144,33.107,17.023,28,24,28z"></path> </g> </g></svg>
                            <h3 class="text-[22px] font-bold ml-[5px]">Account</h3>
                        </div>
                        <div class="flex flex-col text-gray-800 text-[16px] ml-[10px] font-medium w-full leading-[30px]">
                            <span class=""><b>Nome:</b> {{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                            <span class=""><b>Email:</b> {{ Auth::user()->email }}</span>
                            <span class=""><b>Abbonamento:</b> {{Auth::user()->plan }}</span>
                            <span class=""><b>Scadenza:</b> 
                                @if(Auth::user()->plan_expires_at == NULL)
                                    Nessuna
                                @else
                                    {{ Auth:user()->plan_expires_at }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>