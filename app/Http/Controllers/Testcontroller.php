<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

}

