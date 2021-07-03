<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $knishki;
    public function render()
    {
        $this->knishki = Knish::all();
        return view('livewire.search');
    }
    
    
}
