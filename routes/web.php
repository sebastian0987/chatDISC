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

Route::get('/mensaje',function (){

    $mensaje = new \App\Mensaje();
    $mensaje->usuario = "tatan";
    $mensaje->texto="hola";
    $mensaje->fecha=\Carbon\Carbon::now();
    $mensaje->save();
    return view('welcome');
});

Route::get('/chat',function (){
    $mensajes = App\Mensaje::all();
    return view('chat', ['mensajes' => $mensajes]);
});


Route::post('/chat', function () {
    if (request()->get('usuario') == "" or request()->get('mensaje')== ""){
        return redirect()->to('/chat');
    }
    $mensaje = new \App\Mensaje();
    $mensaje->usuario = request()->get('usuario');
    $mensaje->texto = request()->get('mensaje');
    $mensaje->fecha=\Carbon\Carbon::now();
    $mensaje->save();
//    $mensajes = App\Mensaje::all();
//    return \Illuminate\Support\Facades\Redirect::to('chat');
    return redirect()->to('/chat');
//    return view('chat', ['mensajes' => $mensajes]);
});