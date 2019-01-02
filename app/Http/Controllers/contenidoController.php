<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contenidoController extends Controller
{
    public function paginaProhibida(){
        return redirect('http://www.google.com');
    }
}
