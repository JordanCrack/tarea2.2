<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


// Rutas de la web
Route::get('/', [MovieController::class, 'index']);
Route::get('movies/genre/{genre}', [MovieController::class, 'showByGenre']);
