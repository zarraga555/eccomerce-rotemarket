<?php

namespace App\Livewire\Ecommerce;

use Livewire\Component;

class MyWishlist extends Component
{
    public function render()
    {
        return view('ecommerce.account.my-wishlist')->layout('layouts.app');
    }
}
