<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    function index()
    {
    	return view('home');
    }

    function usuarios()
    {
    	return view('menu.usuarios');
    }

    function atolinga()
    {
    	return view('menu.atolinga');
    }

    function momax()
    {
    	return view('menu.momax');
    }

    function santa_maria()
    {
    	return view('menu.santa_maria');
    }

    function teul()
    {
    	return view('menu.teul');
    }

    function tlaltenango()
    {
    	return view('menu.tlaltenango');
    }

    function funcion_publica()
    {
    	return view('menu.funcion_publica');
    }
}
