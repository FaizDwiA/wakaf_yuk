<?php

use App\Http\Controllers\tampilanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/tampilan_awal', [tampilanController::class, 'tampilan_awal']);

Route::get('/tampilan',function(){
    return view('tampilan_awal');
});
