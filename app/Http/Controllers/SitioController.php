<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;

class SitioController extends Controller
{
    public function landingpage(){
        return view("landingpage");
    }

    // public function contacto($codigo = null){
    //     return view("contacto",compact('codigo'));
    // }

    public function contacto($codigo = null){
        if($codigo == 123){
            $nombre = 'Manuel';
            $correo = 'Manuel@test.com';
        }else{
            $nombre = '';
            $correo = '';
        }
        return view("contacto", compact('nombre','correo'));
    }

    public function guarda(Request $request){
        // dd($request->all());

        // $request->validate([
            // 'nombre' => 'required|max:255|min:3',
            // 'correo' => ['required','email'],
            // 'mensaje' => 'required',
        // ]);

        // $contacto = new Contacto();
        // $contacto->nombre = $request->nombre;
        // $contacto->correo = $request->correo;
        // $contacto->mensaje = $request->mensaje;
        // $contacto->save();
        
        // Contacto::create([
        //     'nombre' => $request->nombre,
        //     'correo' => $request->correo,
        //     'mensaje' => $request->mensaje,
        // ]);

        Contacto::create($request->all());

        #DB::insert('insert into contactos (nombre, correo, mensaje) values (?,?,?)',[$request->nombre,$request->correo,$request->mensaje]);
        #DB::table('contactos')->insert($request->except('_tokem'));
        return redirect("/landingpage");
    }

}
