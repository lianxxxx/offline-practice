<?php

use App\Livewire\Pages\Home\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');
Route::get('/menu', App\Livewire\Pages\Menu\Index::class)->name('menu');
