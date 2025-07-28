<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/article/{categoryId}', [FrontController::class, 'articlesByCategory'])->name('articlesByCategory');
Route::get('galleries', [FrontController::class, 'galleries'])->name('galleries');
Route::get('topics', [FrontController::class, 'topics'])->name('topics');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('celebrities', [FrontController::class, 'celebrities'])->name('celebrities');
Route::get('/events', [FrontController::class, 'events'])->name('events');
Route::get('/events/{categoryId}', [FrontController::class, 'eventsByCategory'])->name('eventsByCategory');
Route::get('/event/{eventId}', [FrontController::class, 'eventDetails'])->name('eventDetails');
Route::get('/news', [FrontController::class, 'news'])->name('news');
Route::get('/newsDetails/{newsId}', [FrontController::class, 'newsDetails'])->name('newsDetails');
Route::post('/comments', [FrontController::class, 'store'])->name('comments.store');
Route::get('/reset-category-id', [FrontController::class, 'resetAutoIncrement']);

