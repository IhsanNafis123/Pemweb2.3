<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/produk', function () {
    return 'Daftar semua produk';
});

Route::get('/detail-produk', function () {
    return "Detail produk dengan ID:";
});

Route::get('/keranjang', function () {
    return 'Produk berhasil ditambahkan ke keranjang';
});

Route::get('/cart', function () {
    return 'Isi keranjang belanja Anda';
});

Route::get('/checkout', function () {
    return 'Checkout berhasil';
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
