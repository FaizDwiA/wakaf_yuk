<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
