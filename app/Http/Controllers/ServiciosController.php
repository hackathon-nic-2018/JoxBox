<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Employees;
use App\Category;
use DB;
=======
>>>>>>> d25fd27ba134cf2186f1a7436cd5f2c7b0fb788c
=======
=======
use App\Employees;
use App\Category;
use DB;
>>>>>>> a681e9a89c9352e700a5052b9d233a8fb6a50b74
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53
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
        
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53
        $oferta = DB::table('offers')
        ->join('categories', 'categories.id', '=', 'offers.id_categoria')
        ->join('employees', 'employees.id', '=', 'offers.id_empleado')
        ->select('offers.id','offers.nombre as servicio','offers.imagen','offers.descripcion','categories.nombre as categoria','employees.nombre as empleado')
        ->orderBy('offers.nombre', 'desc')
        ->paginate(10);
        //dd($oferta);
        return view('servicios.listar')->with('oferta',$oferta);
        

    }
    public function listarAll($id){
        $ofertaAll = Offer::orderBy('id','asc')->where('offers.id',$id)->get();
            $ofertaAll->each(function($ofertaAll){
                $ofertaAll->category;
                $ofertaAll->emplo;
                //dd($ofertaAll->category);

            });
        
        return view('servicios.listarAll')->with('ofertaAll',$ofertaAll);
<<<<<<< HEAD
=======
>>>>>>> d25fd27ba134cf2186f1a7436cd5f2c7b0fb788c
=======
>>>>>>> a681e9a89c9352e700a5052b9d233a8fb6a50b74
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53
        $ofertaAll = DB::table('offers')
        ->join('categories', 'categories.id', '=', 'offers.id_categoria')
        ->join('employees', 'employees.id', '=', 'offers.id_empleado')
        ->select('offers.id','offers.nombre as servicio','offers.imagen','offers.descripcion','categories.nombre as categoria','employees.nombre as empleado');
        //->where('offers.id', '=',$id );
        dd($ofertaAll);
        return view('servicios.listarAll')->with('ofertaAll',$ofertaAll);

<<<<<<< HEAD
=======
>>>>>>> d25fd27ba134cf2186f1a7436cd5f2c7b0fb788c
=======
>>>>>>> a681e9a89c9352e700a5052b9d233a8fb6a50b74
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
       
=======
        //
>>>>>>> d25fd27ba134cf2186f1a7436cd5f2c7b0fb788c
=======
        //
=======
       
>>>>>>> a681e9a89c9352e700a5052b9d233a8fb6a50b74
>>>>>>> d0b641a1771473fd0fbd5059ad5bec7666580c53
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
