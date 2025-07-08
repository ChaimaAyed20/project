<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/libraries/{themeId}', [FrontController::class, 'librariesByTheme'])->name('librariesByTheme');
Route::get('galleries', [FrontController::class, 'galleries'])->name('galleries');
Route::get('topics', [FrontController::class, 'topics'])->name('topics');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('schedules', [FrontController::class, 'schedules'])->name('schedules');
Route::get('/events', [FrontController::class, 'events'])->name('events');
Route::get('/events/{categoryId}', [FrontController::class, 'eventsByCategory'])->name('eventsByCategory');
Route::get('/event/{eventId}', [FrontController::class, 'eventDetails'])->name('eventDetails');
Route::get('/news', [FrontController::class, 'news'])->name('news');
Route::get('/newsDetails/{newsId}', [FrontController::class, 'newsDetails'])->name('newsDetails');

