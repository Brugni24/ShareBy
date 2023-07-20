<form action="{{ url('company.search') }}" method="GET" role="search">   
    <label for="ricerca-azienda" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cerca</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input wire:model="term" type="search" name='search' value="" id="default-search" autocomplete="off"  class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cerca le aziende ..." required>
    </div>
    {{-- risultati live delle ricerca --}}
    @if ($term == "")
    @else
        @if($companies->isEmpty())
            <div class="rounded-lg mt-1 border border-gray-300 bg-white py-6 px-10">
                <span class="test-sm text-gray-500">Nessuna azienda trovata.</span>
            </div>
        @else
            <div class="rounded-lg mt-1 border border-gray-300 bg-white">
            @foreach($companies as $company)
                <div class="hover:bg-gray-100 rounded-lg">
                    <a href="/dashboard/{{$company->id}}"><p class="text-md text-gray-900 text-bold mx-8 py-4">{{$company->name}}</p></a>
                </div>
            @endforeach
            </div>
        @endif
    @endif
</div>
<div class="px-4 mt-4">
    {{$companies->links()}}
</div>
</form>