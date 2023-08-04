<x-app-layout>
    <section class="px-[7vw] py-[7vh] lg:px-[10vw]">
        {{-- barra di ricerca --}}
        <livewire:barra-di-ricerca/>
        {{-- output algoritmo --}}
        <div class="py-[5vh] max-w-[1000px] mx-auto">       
            @if($found == 1)
                <div class="flex flex-row items-center py-8">
                    <span class="text-4xl text-gray-800 font-bold uppercase w-fit">{{$azienda->name}}</span>
                    {{-- <div class="flex justify-center items-center bg-gray-200 aspect-square rounded-full ml-8 h-10">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#0E5ECC" stroke-width="1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#0E5ECC" fill-rule="evenodd" d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z"></path> </g></svg>
                    </div> --}}
                </div>

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