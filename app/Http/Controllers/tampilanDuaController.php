<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanDuaController extends Controller
{
    function tampilan_dua()
    {
        return view("tampilan_dua");
    }
}
