<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function ubicacion(){
        return view('pages.ubicacion-descripcion');
    }
    public function espacios(){
        return view('pages.espacios-valores');
    }
    public function equipo(){
        return view('pages.equipo-soporte');
    }
    public function catalogo(){
        return view('pages.catalogo-acabados');
    }
    public function contacto(){
        return view('pages.contacto');
    }
}
