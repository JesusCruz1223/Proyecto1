<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frutasController extends Controller
{
    //funcion que devuelve una vista con datos
    public function index(){
        return view('frutas.index')->with('frutas' , array(
            'melon',
            'sandia',
            'durazno',
            'uva',
            'platano'
        ));
    }

    public function naranjas(){
        return "Accion de Naranjas";
    }

    public function peras(){
        return "Accion de Peras ";
    }

}
