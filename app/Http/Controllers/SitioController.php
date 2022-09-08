<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage(){
        return view("landingpage");
    }

    public function contacto($codigo = null){
        return view("contacto",compact('codigo'));
    }
}
