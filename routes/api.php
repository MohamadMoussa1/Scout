<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ScoutController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\TroopController;
// API Routes\
//-------------//
//Authentication routes
// Route to register a new user
Route::post('/register', [AuthController::class, 'register']);
// Route to login a user
Route::post('/login', [AuthController::class, 'login']);
// Route to logout a user
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


//Scout crud api
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




Route::get('/regions', [RegionController::class, 'index']);

// Route to get troops by region ID// Return troops by region ID
Route::get('/regions/{region}/troops', [RegionController::class, 'getTroopsByRegion']);
//Route to get units by troop ID
Route::get('/troops/{troop}/units', [TroopController::class, 'getUnitsByTroop']);