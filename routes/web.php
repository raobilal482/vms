<?php

use App\Livewire\AdminPanelHome;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->get('/admin', AdminPanelHome::class)->name('admin.panel');
Route::middleware(['auth'])->get('/dashboard', Dashboard::class)->name('dashboard');