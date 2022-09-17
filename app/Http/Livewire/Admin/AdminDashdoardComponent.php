<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashdoardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashdoard-component')->layout('layouts.base');
    }
}
