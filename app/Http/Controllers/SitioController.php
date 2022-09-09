<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage(){
        return view("landingpage");
    }

    // public function contacto($codigo = null){
    //     return view("contacto",compact('codigo'));
    // }

    public function contacto(){
        return view("contacto");
    }

    public function recibe_form_contacto(Request $request){
        // dd($request->all());
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => ['required','email'],
            'mensaje' => 'required',
        ]);
    }
}
