<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Create 
Route::resource('chirps',ChirpController::class);

Route::resource('chirps', ChirpController::class);