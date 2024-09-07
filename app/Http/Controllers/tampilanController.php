<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanController extends Controller
{
    function tampilan_awal() 
    {
        return view("tampilan_awal");
    }
}
