<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ScoutController;

// API Routes
//Scour crud api
//-------------//
// Route to get all scouts
Route::get('/scouts', [ScoutController::class, 'index']);
// Route to create a new scout
Route::post('/scouts', [ScoutController::class, 'store']);
// Route to get a specific scout by ID
Route::get('/scouts/{id}', [ScoutController::class, 'show']);
// Route to update a specific scout by ID
Route::put('/scouts/{id}', [ScoutController::class, 'update']);
// Route to delete a specific scout by ID
Route::delete('/scouts/{id}', [ScoutController::class, 'destroy']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
