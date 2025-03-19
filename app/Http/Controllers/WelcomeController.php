<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        return 'Hello Word';
        // return view('welcome');
    }

    public function aboutUs()
    {
        return 'Sobre-nos';
    }

    public function contact()
    {
        return 'Contato';
    }
}