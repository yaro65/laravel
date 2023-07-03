<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\validerformerequeste;

use Illuminate\Http\Request;


class TesController extends Controller
{
    public function store(validerformerequeste $request)
    {
       $verif = $request;

       if ($verif) {
        echo 'verification passer';
       } else {
        return redirect()->back();
       }
    }
}
