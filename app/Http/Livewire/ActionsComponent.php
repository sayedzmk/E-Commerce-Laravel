<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ActionsComponent extends Component
{
    public $sum;
    public function add($a,$b){
        $this->sum=$a+$b;
    }
    public function render()
    {
        return view('livewire.actions-component')->layout('layouts.base');
    }
}
