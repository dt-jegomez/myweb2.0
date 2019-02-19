<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experiencia;
class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // if(!$request->ajax())return redirect('/');
        $experiencias = Experiencia::select('*')->orderBy('id','desc')->get();
        return $experiencias;
    }

   
}
