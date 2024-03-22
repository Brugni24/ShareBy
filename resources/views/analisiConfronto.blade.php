<x-app-layout>
    <section class="mx-[5vw]">
        <div class="py-16 md:py-20">
            <h2 class="text-left text-[38px] pb-[20px]">Confronto tra aziende:</h2>
            <form class="confronto-form">
                @csrf
                <div class="flex flex-wrap justify-evenly">
                    <div class="basis-1/2 max-w-[300px]">
                        <x-input-label>Azienda 1:</x-input-label>
                        <select class="block mt-1 w-full border-gray-300 focus:border-primary focus:ring-primary rounded-md shadow-sm text-gray-800" name="azienda1" id="confronto-input-azienda1" autocomplete="off">
                            <option value="A2A">A2A</option>
                            <option value="ENI">Eni</option>
                            <option value="SARAS">Saras</option>
                            <option value="Telecom">Telecom</option>
                        </select>
                    </div>
                    <div class="basis-1/2 max-w-[300px]">
                        <x-input-label>Azienda 2:</x-input-label>
                        <select class="block mt-1 w-full border-gray-300 focus:border-primary focus:ring-primary rounded-md shadow-sm text-gray-800" name="azienda1" id="confronto-input-azienda2" autocomplete="off">
                            <option value="A2A">A2A</option>
                            <option value="ENI">Eni</option>
                            <option value="SARAS">Saras</option>
                            <option value="Telecom">Telecom</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="flex justify-center">
                    <button class="confronto-send inline-flex items-center rounded-[18px] bg-primary py-3 px-6 font-semibold text-sm text-white border border-[#7096C7] hover:scale-110 focus:scale-110 transition-all duration-300" type="submit">Confronta</button>
                </div>
                <br>
                <div class="risposta-confronto-wrap">
                    <h3>Risposta:</h3>
                    <div class="risposta-confronto">
                    </div>
                </div>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                //Broadcast messages
                $("form").submit(function (event) {
                event.preventDefault();

                var azienda1 = $("form #confronto-input-azienda1").val();
                var azienda2 = $("form #confronto-input-azienda2").val();
                var risposta = $(".risposta-confronto");
                
                if (azienda1 == azienda2) {
                    risposta.html('<p>Errore, non è possibile confrontare due aziende uguali ...</p>');
                }else{
                    //Disable form
                    $("form #confronto-input-azienda1").prop('disabled', true);
                    $("form #confronto-input-azienda2").prop('disabled', true);
                    $("form button").prop('disabled', true);

                    risposta.html('<p>Caricamento...</p>');

                    try{
                    $.ajax({
                    url: "/analisiConfronto/confronta",
                    method: 'POST',
                    headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                    "azienda1": azienda1,
                    "azienda2": azienda2,
                    }
                    }).done(function (res) {
                        risposta.html('<p>'+res+'</p>');
                    });
                    } catch(error){
                        console.error("An error occurred: ", error);
                        risposta.html('<p>An error occurred: ' + error + '</p>');
                    } finally{
                        //Enable form
                        $("form #confronto-input-azienda1").prop('disabled', false);
                        $("form #confronto-input-azienda2").prop('disabled', false);
                        $("form button").prop('disabled', false);
                    }
                }
                });
            </script>
        </div>
    </section>
    @livewireScripts
</x-app-layout>