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

Route::get('/', \App\Livewire\TeamList::class);
Route::get('/new', \App\Livewire\NewMember::class)->name('new');
Route::get('/settings', \App\Livewire\Settings::class)->name('new');
