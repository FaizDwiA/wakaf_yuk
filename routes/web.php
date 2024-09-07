<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/tampilan_awal', [registerController::class, 'tampilan_awal']);
