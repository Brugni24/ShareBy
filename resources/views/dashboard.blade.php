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
        <div class="px-[7vw] py-[7vh] lg:px-[10vw]">
            <div class="rounded-[20px] bg-white border border-gray-300 w-60 h-60">

            </div>
        </div>
    </section>
</x-app-layout>