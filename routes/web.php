<?php

use App\Livewire\AdminPanelHome;
use App\Livewire\Dashboard;
use App\Livewire\Events;
use App\Livewire\Tasks;
use App\Livewire\Time;
use App\Livewire\Volunteer;
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
Route::middleware(['auth'])->get('/volunteer', Volunteer::class)->name('volunteer');
Route::middleware(['auth'])->get('/events', Events::class)->name('events');
Route::middleware(['auth'])->get('/tasks', Tasks::class)->name('tasks');
Route::middleware(['auth'])->get('/time', Time::class)->name('time');

Route::middleware(['auth'])->get('/dashboard', Dashboard::class)->name('dashboard');
