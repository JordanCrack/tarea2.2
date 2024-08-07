<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Rutas API
Route::get('/api/movies', [MovieController::class, 'index']);
Route::get('/api/movies/{id}', [MovieController::class, 'show']);
Route::post('/api/movies', [MovieController::class, 'store']);
Route::put('/api/movies/{id}', [MovieController::class, 'update']);