<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/admin/pos', \App\Livewire\PosController::class);
});

/// Company Public routes
Route::get('about-us', function (){})->name('aboutUs');
Route::get('shipping-policy', function (){})->name('shippingPolicy');
Route::get('privacy-policy', function (){})->name('privacyPolicy');
Route::get('terms-and-conditions', function (){})->name('termsAndConditions');
Route::get('contact-us', function (){})->name('contactUs');
Route::get('assistance-center', function (){})->name('assistanceCenter');
Route::get('job-offers', function (){})->name('jobOffers');

/// Company Private Routes Customer Account
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//    Account Single Page
    Route::get('my-account', \App\Livewire\Ecommerce\MyAccount::class)->name('myAccount');
    Route::get('my-account#voucher', \App\Livewire\Ecommerce\MyAccount::class)->name('myVoucher');
    Route::get('my-account#orders', \App\Livewire\Ecommerce\MyAccount::class)->name('trackOrder');
    Route::get('my-account#account-detail', \App\Livewire\Ecommerce\MyAccount::class)->name('accountDetails');
    Route::get('my-cart', \App\Livewire\Ecommerce\MyCart::class)->name('myCart');
    Route::get('my-wishlist', function (){return "Wishlist";})->name('wishlist');
    Route::get('help-tickets', function (){})->name('helpTickets');
    Route::get('shipping-details', function (){})->name('shippingDetails');
});
