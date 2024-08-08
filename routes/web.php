<?php

use Illuminate\Support\Facades\Route;

// Authentication Routes...
Route::middleware('guest')->group(function () {
    // Arahkan ke login
    Route::get('/', function () {
        return to_route('login');
    });
    // Halaman Login
    Route::get('login', App\Livewire\Auth\Login::class)->name('login');
});

// Authenticated User Routes...
Route::middleware('auth')->group(function () {
    // Halaman Dashboard
    Route::get('dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');
    // Halaman Create Buku Agenda
    Route::get('tambah-buku-agenda', App\Livewire\Dashboard\Create::class)->name('agenda.create');
    // Halaman Edit Buku Agenda
    Route::get('edit-buku-agenda/{id}', App\Livewire\Dashboard\Edit::class)->name('agenda.edit');
});
