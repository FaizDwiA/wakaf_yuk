<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanLimaController extends Controller
{
    function tampilan_lima()
    {
        return view("tampilan_lima");
    }
}
