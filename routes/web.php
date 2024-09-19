<?php

use App\Http\Controllers\tampilanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\passwordController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\password;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/password', [passwordController::class, 'password']);
Route::get('/tampilan_awal', [tampilanController::class, 'tampilan_awal']);

Route::get('/tampilan',function(){
    return view('tampilan_awal');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);