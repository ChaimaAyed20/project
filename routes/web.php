<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/speakers.html', [FrontController::class, 'speakers'])->name('speakers');
<<<<<<< HEAD
Route::get('speakers-two.html', [FrontController::class, 'speakers_two'])->name('speakers_two');
Route::get('speakers-three.html', [FrontController::class, 'speakers_three'])->name('speakers_three');
Route::get('about-2.html', [FrontController::class, 'about_2'])->name('about_2');
Route::get('about-3.html', [FrontController::class, 'about_3'])->name('about_3');
Route::get('gallery.html', [FrontController::class, 'gallery'])->name('gallery');
Route::get('pricing.html', [FrontController::class, 'pricing'])->name('pricing');
Route::get('contact.html', [FrontController::class, 'contact'])->name('contact');
Route::get('schedules.html', [FrontController::class, 'schedules'])->name('schedules');
Route::get('schedules-2.html', [FrontController::class, 'schedules2'])->name('schedules2');
=======
Route::get('/event.html', [FrontController::class, 'event'])->name('event');

>>>>>>> 90a338c42ba5586c5c6c0dff911d9526d1808df1
