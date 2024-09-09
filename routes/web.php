<?php

use App\Http\Controllers\tampilanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/tampilan_awal', [tampilanController::class, 'tampilan_awal']);

Route::get('/',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about', ['nama' => 'Faiz']);
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/tampilan',function(){
    return view('tampilan_awal');
});
