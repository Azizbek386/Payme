<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymeController;
use App\Http\Controllers\ProfileController;



// Sanctum orqali user olish
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Payme route (faqat autentifikatsiya qilingan userlar)
Route::post('/payme', [PaymeController::class, 'index'])
    ->middleware('auth:sanctum');


