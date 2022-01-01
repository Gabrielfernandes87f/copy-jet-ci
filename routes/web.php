<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\{
    ShowTweets
};

Route::get('tweets', ShowTweets::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/homepage',  [ProductController::class, 'index'])->middleware('auth')->name('homepage');


