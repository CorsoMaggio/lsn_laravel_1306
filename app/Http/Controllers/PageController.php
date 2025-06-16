<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    //metodo
    public function homepage()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contatti');
    }

    public function aboutme()
    {
        return view('chisono');
    }
};
