<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class passwordController extends Controller
{
    function password() 
    {
        return view('password');
    }
}
