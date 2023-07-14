<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class BarraDiRicerca extends Component
{
    public $term = "";

    public function render()
    {
        sleep(1);
        $companies = Company::search($this->term)->paginate(10);

        $data = [
            'companies' => $companies,
        ];

        return view('livewire.barra-di-ricerca', $data);
    }
}
