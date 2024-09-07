<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    function register() 
    {
        return view('register');
    }
}
