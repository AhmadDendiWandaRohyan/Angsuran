<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KreditController;

Route::get('/', function () {
    return view('kredit.home');
});

Route::get('/angsuransi', [KreditController::class, 'index']);
Route::post('/hitung', [KreditController::class, 'hitung'])->name('kredit.hitung');