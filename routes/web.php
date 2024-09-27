<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/profile', [UserController::class,'profile']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class,'store'])->name('user.store');
Route::post('/profile/store', [UserController::class, 'store'])->name('profile.store');