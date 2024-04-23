<?php

namespace App\Livewire;

use Livewire\Component;

class PosController extends Component
{
    public function render()
    {
        return view('livewire.pos')->layout('layouts.admin.pos.layout');
    }
}
