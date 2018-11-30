<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use Auth;
use Image;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $servicio = new Offer;
        $servicio->id_empleado = \Auth::user()->id;
        $servicio->id_categoria = $request->categoria;
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->años_experiencia = $request->años_experiencia;
        $servicio->puesto = $request->puesto;
        $servicio->estado_laboral = $request->estado_laboral;
        $servicio->aspiracion_salarial = $request->aspiracion_salarial;
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $file1 = time().".".$file->getClientOriginalExtension();
            $file->move("images/", "{$file1}");
            $servicio->imagen = $file1;  
        }        
        $servicio->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
