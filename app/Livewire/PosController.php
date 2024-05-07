<?php

namespace App\Livewire;

use Livewire\Component;

class PosController extends Component
{
    public function render()
    {
        return view('livewire.eccomerce.employee.pos')->layout('layouts.admin.pos.layout');
    }
}
