<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FlagController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VideoController;
use Illuminate\Support\Facades\Route;

# Users
## LOGIN
Route::post('/login', [AuthController::class, 'login'])->name('login');
## READ
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
## CRIA USUARIO SEM AUTENTICAÇÃO (APENAS PARA TESTES)
Route::post('/users/admin', [UserController::class, 'store']); //CREATE

# Videos
// ## READ
Route::get('/videos', [VideoController::class, 'index']);
Route::get('/videos/{video}', [VideoController::class, 'show']);

# Flags
## READ
Route::get('/flags', [FlagController::class, 'index']);
Route::get('/flags/{flag}', [FlagController::class, 'show']);

### Authenticated
Route::group(['middleware' => ['auth:sanctum']], function () {
    # Users
    Route::post('/logout/{user}', [AuthController::class, 'logout']); //LOGOUT
    Route::post('/users', [UserController::class, 'store']); //CREATE
    Route::put('/users/{user}', [UserController::class, 'update']); //UPDATE
    Route::delete('/users/{user}', [UserController::class, 'destroy']); //DELETE

    # Videos
    Route::apiResource('videos', VideoController::class)->except(['index', 'show']);
    Route::apiResource('flags', FlagController::class)->except(['index', 'show']);
});
