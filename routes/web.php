<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/vistaHome' , 'welcome',['name' => 'taylor']);

Route::match(['post' , 'get'] , '/Bienvenida' , function(){
    return "Hola Bienvenido Seas";
});

Route::get('/contacto/{id?}' , function($id = null){
    if(isset($id)){
        return "Mostrando Contacto {$id}";
    }else{
        return "Ningun Contacto Aun";
    }
});

Route::get('/pagina/{nombre?}/{edad?}' , function($nombre = null , $edad = null){
    //Primera Forma para enviar datos a la vista
        // return view('welcome' , array(
        //     'nombre' => $nombre,
        //     'edad' => $edad
        // ));
    //Segunda Forma de enviar datos a la vista
    return view('welcome')
                ->with('nombre' , $nombre)
                ->with('edad' , $edad);
})->where(['nombre' => '[A-Za-z]+',
            'edad' => '[0-9]+'
]);


Route::post('/recibir' , 'frutasController@recibirFormulario');

Route::group(['prefix' => 'fruteria'] , function(){
    Route::get('/frutas' , 'frutasController@index');
//Route::get('/naranjas' , 'frutasController@naranjas');
    Route::get('/frutas/naranjas/{admin?}' , [
    'middleware' => 'EsAdmin',
    'uses' => 'frutasController@naranjas'
    ]);
    
    Route::get('/peras' , 'frutasController@peras');

    Route::get('/SitioProhibido/{mayorEdad}' , [
    'middleware' => 'EsMayor',
    'uses' => 'contenidoController@paginaProhibida'
    ])->where(['mayorEdad' => '[0-9]+']);
});

