<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __invoke()
    {
        return view('auth/login');
        //return view('welcome');
    }
}
