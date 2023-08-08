<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class BarraDiRicerca extends Component
{
    public $term = "";

    public function render(){
        if (empty($this->term)) {
            $this->companies = Company::where('name', $this->term)->get();
        } else {
            $this->companies = Company::where('name', 'like', '%'.$this->term.'%')->get();
        }
        return view('livewire.barra-di-ricerca');
    }
}
