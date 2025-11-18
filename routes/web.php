<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

Route::post('/contact', [ContactController::class, 'submit']);
