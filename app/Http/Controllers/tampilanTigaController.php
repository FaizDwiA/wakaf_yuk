<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanTigaController extends Controller
{
    function tampilan_tiga()
    {
        return view("tampilan_tiga");
    }
}
