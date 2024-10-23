<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/ola', [HomeController::class, 'index']);

# Users
### SIGNUP
Route::get('/login', [AuthController::class, 'form'])->name('login.form');
Route::post('/login', [AuthController::class, 'signup'])->name('signup.verify');
### READ
Route::get('/users', [UserController::class, 'index']);
Route::get('/profile/{id}', [UserController::class, 'show']);
### UPDATE
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
### DELETE
Route::get('/user/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
Route::post('/user/{id}/delete_confirmation', [UserController::class, 'confirm_delete'])->name('user.delete_confirmation');
####LOGIN
Route::get('/login', [AuthController::class, 'form'])->name('login.form');
Route::post('/', [AuthController::class, 'login'])->name('login.verify');

Route::group(['middleware' => ['auth:sanctum']], function () {
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); //LOGOUT
  Route::get('/video-upload', [VideoController::class, 'create'])->name('video.create'); //ADD VIDEO
  Route::post('/video-store', [VideoController::class, 'store'])->name('video.upload'); //UPLOAD VIDEO
});

# Videos
Route::get('/', [VideoController::class, 'index']);
Route::get('/watch/{id}', [VideoController::class, 'show']);

# Flags
Route::get('/flags', [FlagController::class, 'index']);
Route::get('/flag/{id}', [FlagController::class, 'show']);
