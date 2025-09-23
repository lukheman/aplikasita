<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

Route::get('/nota/{project:uuid}/cetak', [NotaController::class, 'cetak'])->name('nota');
Route::get('/progres-projek/{project:uuid}', \App\Livewire\ProgresProjek::class)->name('progres-projek');

Route::get('/', \App\Livewire\Landing::class)->name('landing');
