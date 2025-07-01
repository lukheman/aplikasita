<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

Route::get('/nota/{project}/cetak', [NotaController::class, 'cetak'])->name('nota');
