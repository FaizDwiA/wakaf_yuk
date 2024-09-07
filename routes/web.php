<?php

use App\Http\Controllers\tampilanLimaController;
use App\Http\Controllers\tampilanEmpatController;
use App\Http\Controllers\tampilanTigaController;
use App\Http\Controllers\tampilanDuaController;
use App\Http\Controllers\tampilanSatuController;
use App\Http\Controllers\tampilanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [registerController::class, 'register']);
Route::get('/tampilan_awal', [tampilanController::class, 'tampilan_awal']);
Route::get('/tampilan_satu', [tampilanSatuController::class, 'tampilan_satu']);
Route::get('/tampilan_dua', [tampilanDuaController::class, 'tampilan_dua']);
Route::get('/tampilan_tiga', [tampilanTigaController::class, 'tampilan_tiga']);
Route::get('/tampilan_empat', [tampilanEmpatController::class, 'tampilan_empat']);
Route::get('/tampilan_lima', [tampilanLimaController::class, 'tampilan_lima']);

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
