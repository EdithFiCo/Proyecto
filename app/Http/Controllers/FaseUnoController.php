<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;
use Filesystem;
use Session;

class FaseUnoController extends Controller
{
    //
    public function index($proyecto='None')
    {
        $proyecto=\Siropa\Proyecto::find($proyecto);
        return view('fases.uno')->with('proyecto', $proyecto);
    }

    public function boton2(Request $request,$id)
    {
        $chec=0;
        if ($request['check_button1']!=null)
        {
            $chec=1;
        }

        $nota="None";
        if ($request['descripcion2']!=null)
        {
            $nota="";
        }

        \Siropa\_fase_uno::create([
            'numero' => 2,
            'permiso_check' => $chec,
            'aceptado' => $request['options2'],
            'path_file_pdf' => '/hola',
            'primera_carga' =>  date("Y"). "-" . date("m")."-".date("d"),
            'nota' => $nota
        ]);
        return view('fases.uno')->with('proyecto', $id);


        /*echo ('|'.$request['check_button2']);
        echo ('|'.$id);
        echo ('|'.$request['options2']);
        echo ('|'.$request['descripcion2']);*/



    }

}
