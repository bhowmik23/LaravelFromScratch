<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
 

Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);
