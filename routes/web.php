<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/speakers.html', [FrontController::class, 'speakers'])->name('speakers');
Route::get('/event.html', [FrontController::class, 'event'])->name('event');

