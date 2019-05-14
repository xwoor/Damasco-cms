<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function mantenimiento(){
        return view('pages.mantenimiento');        
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
    public function mail(Request $request){

        $datos['name'] = $request->input('nombre');
        $datos['email'] = $request->input('email');
        $datos['intereses'] = $request->input('intereses');
        $datos['celular'] = $request->input('celular');
        $datos['mensaje'] = $request->input('mensaje');
        $toEmail = "marioosorio714@gmail.com";
        Mail::to($toEmail)->send(new sendEmail($datos));
        return 'Email has been sent to '. $toEmail;
    }
}
