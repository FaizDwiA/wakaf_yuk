<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanSatuController extends Controller
{
    function tampilan_satu()
    {
        return view("tampilan_satu");
    }
}
