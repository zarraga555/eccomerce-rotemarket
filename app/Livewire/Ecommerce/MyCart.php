<?php

namespace App\Livewire\Ecommerce;

use Livewire\Component;

class MyCart extends Component
{
    public function render()
    {
        return view('ecommerce.account.my-cart')->layout('layouts.app');
    }
}
