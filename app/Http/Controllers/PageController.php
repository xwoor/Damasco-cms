<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;
use Session;
use Redirect;


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
        
        Mail::send('emails.contact', $request->all(), function($mensaje){
            $mensaje->subject('Correo de Contacto');
            $mensaje->to('info@proyectosdamasco.com');
        });
        Session::flash('mensaje','Email enviado exitosamente ');
        return Redirect::to('');
    }
}
