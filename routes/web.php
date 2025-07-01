<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nota/{project}/cetak', [NotaController::class, 'cetak'])->name('nota');
