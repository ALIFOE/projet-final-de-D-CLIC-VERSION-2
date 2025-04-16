<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\InstallationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes pour les utilisateurs
Route::prefix('utilisateurs')->group(function () {
    Route::get('/', [UtilisateurController::class, 'index']);
    Route::post('/', [UtilisateurController::class, 'store']);
    Route::get('/{utilisateur}', [UtilisateurController::class, 'show']);
    Route::put('/{utilisateur}', [UtilisateurController::class, 'update']);
    Route::delete('/{utilisateur}', [UtilisateurController::class, 'destroy']);
});

// Routes pour les installations
Route::prefix('installations')->group(function () {
    Route::get('/', [InstallationController::class, 'index']);
    Route::post('/', [InstallationController::class, 'store']);
    Route::get('/{installation}', [InstallationController::class, 'show']);
    Route::put('/{installation}', [InstallationController::class, 'update']);
    Route::delete('/{installation}', [InstallationController::class, 'destroy']);
    Route::get('/{installation}/production', [InstallationController::class, 'getProductionData']);
    Route::get('/{installation}/consommation', [InstallationController::class, 'getConsommationData']);
});
