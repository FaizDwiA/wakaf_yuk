<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function index()
    {

        $data = ["FAIZ"];

        return view('welcome', ['nama' => $data]);
    }

    function login()
    {
        return view('login');
    }
}
