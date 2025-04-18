<form>  
    <label for="ricerca-azienda" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cerca</label>
    <div class="flex w-full max-w-[700px] m-auto">
        <input wire:model="term" type="search" name='search' value="" id="default-search" autocomplete="off" class="block w-full p-4 pl-6 text-sm text-gray-900 border-1 border-gray-300 rounded-l-lg focus:border-primary" placeholder="Cerca le aziende..." required>
        <div class="inline-flex items-center bg-primary p-4 rounded-r-lg" type="submit">
            <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
    </div>
    {{-- risultati live delle ricerca --}}
    <div class="mx-auto max-w-[700px]">
        <div class="absolute rounded-lg mt-1 border border-gray-300 bg-white">
            @if ($term == "")
            @else
                @if ($companies && $companies->count() > 0)
                    @foreach($companies as $company)
                        <div class="flex flex-row items-center hover:bg-gray-100 rounded-lg w-[86vw] max-w-[700px] px-4">
                            <img class="aspect-square h-6 mr-2" src="{{ route('company.logo', ['id' => $company->id, 'companyName' => $company->name]) }}">
                            <a href="/analisiAziendale/{{$company->id}}" class="w-full"><p class="text-sm text-gray-900 text-bold py-4 text-left">{{$company->name}}</p></a>
                        </div>
                    @endforeach
                @else
                     <p class="py-4 px-6 text-sm text-gray-400 w-[86vw] max-w-[700px]">Nessuna azienda trovata.</p>
                @endif
            @endif
        </div>
    </div>
</div>
</form>