<x-app-layout>
    <section class="px-[5vw]">
        <div class="px-[5vw] py-12 lg:px-[7vw] xl:px-[10vw]">
            {{-- barra di ricerca --}}
            <livewire:barra-di-ricerca/>
            {{-- output algoritmo --}}
            <div>       
                @if($found == 1)
                    <div class="w-full">
                        <span class="text-primary text-xs font-bold uppercase">analisi aziendale</span>
                        <span class="text-gray-400 text-xs">></span>
                        <span class="text-gray-400 text-xs uppercase">{{$azienda->name}}</span>
                    </div>
                    <div class="flex flex-row items-center py-8">
                        <span class="text-4xl text-gray-800 font-bold uppercase w-fit">{{$azienda->name}}</span>
                        <div class="flex justify-center items-center bg-gray-200 aspect-square rounded-full ml-8 h-10">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#0E5ECC" stroke-width="1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#0E5ECC" fill-rule="evenodd" d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z"></path> </g></svg>
                        </div>
                    </div>

                    <div class="w-full">
                        <canvas id="roiChart"></canvas>
                    </div>
                    
    
                    <script>
                        var roi = {{$azienda->roi}};
                        console.log(roi);
    
                        const ctx = document.getElementById('roiChart').getContext('2d');
    
                        const roiChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [2018, 2019, 2020, 2021, 2022],
                                datasets: [{
                                    label: 'roi',
                                    data: roi,
                                }]
                            }
                        });
                    </script>
                @else
                    <div>
                        <h1 class="font-bold text-2xl text-center">NESSUNA AZIENDA CERCATA...</h1>
                        <p class="text-gray-600 text-sm text-center my-2">Cerca un'azienda utilizzando la barra di ricerca sovrastante.</p>
                        <div class="mt-20">
                            <img src="/img/search.svg" class="w-[50%] m-auto">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @livewireScripts
</x-app-layout>