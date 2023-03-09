<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Continent;
use App\Models\Country;

class CascadingDropdowns extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount(){

        $this->continents = Continent::all();

    }

    public function render(){

        return view('livewire.cascading-dropdowns');

    }

    public function changeContinent(){

        sleep(1);

        if ($this->selectedContinent !== '-1') {

            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();

        }

    }
}
