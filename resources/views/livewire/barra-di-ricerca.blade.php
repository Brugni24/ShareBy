<form action="{{ url('company.search') }}" method="GET" role="search">  
    <label for="ricerca-azienda" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cerca</label>
    <div class="flex w-full max-w-[700px] m-auto">
        <input wire:model="term" type="search" name='search' value="" id="default-search" autocomplete="off"  class="block w-full p-4 pl-6 text-sm text-gray-900 border-1 border-gray-300 rounded-l-lg focus:border-primary" placeholder="Cerca le aziende..." required>
        <button class="inline-flex items-center bg-primary p-4 rounded-r-lg" type="submit">
            <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
    </div>
    {{-- risultati live delle ricerca --}}
    <div class="mx-auto max-w-[700px]">
        <div class="absolute rounded-lg mt-1 border border-gray-300 bg-white">
            @if ($term == "")
            @else
                @if($companies->isEmpty())
                        <p class="py-4 px-6 text-sm text-gray-400 w-[86vw] max-w-[700px]">Nessuna azienda trovata.</p>
                @else
                    @foreach($companies as $company)
                        <div class="hover:bg-gray-100 rounded-lg w-[86vw] max-w-[700px]">
                            <a href="/analisiAziendale/{{$company->id}}"><p class="text-sm text-gray-900 text-bold px-6 py-4">{{$company->name}}</p></a>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</div>
<div class="px-4 mt-4">
    {{$companies->links()}}
</div>
</form>