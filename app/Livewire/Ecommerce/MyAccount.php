<?php

namespace App\Livewire\Ecommerce;

use Livewire\Component;

class MyAccount extends Component
{
    public function render()
    {
        return view('ecommerce.account.my-account')->layout('layouts.app');
    }
}
