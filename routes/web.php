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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/pos', \App\Livewire\PosController::class);
});
// Auth
Route::get('/login-customer', \App\Livewire\Customer\LoginCustomer::class)->name('loginCustomer');
Route::get('/register-customer', \App\Livewire\Customer\RegisterCustomer::class)->name('registerCustomer');
Route::get('/forget-password-customer', \App\Livewire\Customer\ForgetPasswordCustomer::class)->name('forgetPasswordCustomer');
Route::get('/privacy-policy', function (){
    return "Privacy Policy";
})->name('privacyPolicy');
