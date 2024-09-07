<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanEmpatController extends Controller
{
    function tampilan_empat()
    {
        return view("tampilan_empat");
    }
}
