<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pages\Home\Index::class)->name('home');
Route::get('/menu', App\Livewire\Pages\Menu\Index::class)->name('menu');
