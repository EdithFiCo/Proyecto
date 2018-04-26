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

Route::get('/','FrontEndController@index');
Route::get('admin','FrontEndController@admin');
/*
Route::get('index', function () {
    return view('index');
});
*/
Route::resource('usuario','UsuarioController');

Route::resource('login','LoginController');


Route::get('faseuno/{proyecto?}', ['as'=>'faseuno.index','uses'=>'FaseUnoController@index']);

Route::post('faseuno/{id}',['as'=>'faseuno.boton2','uses'=>'FaseUnoController@boton2']);


Route::resource('fasedos', 'ArchiDosController');

Route::resource('proyecto', 'ProyectoController');
Route::resource('adquisicion', 'AdquisicionController');

Route::resource('municipio', 'MunicipioController');

Route::get('/usuarios', 'Controlador@usuarios');

Route::get('/atolinga', 'Controlador@atolinga');

Route::get('/florencia', 'Controlador@florencia');

Route::get('/momax', 'Controlador@momax');

Route::get('/santa_maria', 'Controlador@santa_maria');

Route::get('/tepechitlan', 'Controlador@tepechitlan');

Route::get('/teul', 'Controlador@teul');

Route::get('/tlaltenango', 'Controlador@tlaltenango');
Route::get('/significado', 'Controlador@SIROPA');
Route::get('/garcia', 'Controlador@garcia');
Route::get('/funcion_publica', 'Controlador@funcion_publica');

