<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilanController extends Controller
{
    function tampilan_awal() 
    {
        $data = [
            [1,"Raihan", "Bogor", "Designer"],
            [2,"Faiz", "Jakarta", "Visual"],
            [3,"Hendra", "Bogor", "Programmer"],
            [4,"Rivan", "Bogor", "Designer"],
            [5,"Faiq", "Bogor", "Programmer"],
        ];
        return view("tampilan_awal",['dataTable' => $data]);
    }
}
