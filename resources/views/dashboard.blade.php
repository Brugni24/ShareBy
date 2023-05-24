<x-app-layout>
    <section class="px-[5vw]">
        {{-- barra di ricerca --}}
        <div class="px-[5vw] py-12 lg:px-[7vw] xl:px-[10vw]">
            <form>   
                <label for="ricerca-azienda" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cerca</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cerca le aziende ..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cerca</button>
                </div>
            </form>
        </div>
        {{-- output algoritmo --}}
        <div>
            <div class="w-full">
                <span class="text-primary text-xs font-bold uppercase">analisi aziendale</span>
                <span class="text-gray-400 text-xs">></span>
                <span class="text-gray-400 text-xs uppercase">azienda</span>
            </div>
            <div class="flex flex-row items-center py-8">
                <span class="text-4xl text-gray-800 font-bold uppercase w-fit">azienda</span>
                <div class="flex justify-center items-center bg-gray-200 aspect-square rounded-full ml-8 h-10">
                    <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#0E5ECC" stroke-width="1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#0E5ECC" fill-rule="evenodd" d="M9 17a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 10-2 0v6H3a1 1 0 000 2h6v6z"></path> </g></svg>
                </div>
            </div>
            {{-- grafici --}}
            <div>
                
            </div>
        </div>
    </section>
</x-app-layout>
