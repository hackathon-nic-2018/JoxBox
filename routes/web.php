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

// Route::get('/', function () {
    // return view('index');
// });
route::get('/', 'FrontController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', function () {
    return view('perfil');
});
Route::Resource('/empleador','EmpleadorController');
Route::Resource('/categorias','CategoriaController');
Route::Resource('/servicios','ServiciosController');
Route::get('/listar/{id}','ServiciosController@listarAll');

Route::resource('empleado', 'EmpleadoController');
Route::resource('curso', 'CursosCOntroller');




Route::get('/listall/{page?}', 'EmpleadoController@listallcursos');