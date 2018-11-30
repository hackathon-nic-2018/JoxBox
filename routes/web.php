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
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/listar/{id}','ServiciosController@listarAll');
=======
>>>>>>> d25fd27ba134cf2186f1a7436cd5f2c7b0fb788c
=======

Route::get('/listar/{id}','ServiciosController@listarAll');

>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53

Route::resource('empleado', 'EmpleadoController');
Route::resource('curso', 'CursosCOntroller');




Route::get('/listall/{page?}', 'EmpleadoController@listallcursos');