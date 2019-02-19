<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titulo;
class TituloController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $titulo = Titulo::where('tipo','=',1)->select('*')->orderBy('id','desc')->get();
        return $titulo;
    }
    public function cursos(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $cursos = Titulo::where('tipo','=',0)->select('*')->orderBy('id','desc')->get();
        return $cursos;
    }
}
