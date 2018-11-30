<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitu;

class SolicitudController extends Controller
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
        $solicitud = new Solicitu;

        $solicitud->descripcion=$request->get('descripcion');
        $solicitud->id_empleador=$request->get('id_empleador');
        $solicitud->id_empleado=$request->get('id_empleado');
        //$curso->id_empleado=\Auth::user()->id;

        //dd($request);
        $solicitud->save();
        // dd(request()->all());

       //return redirect()->route('empleado.show', $aux);
        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $solicitud = new Solicitu;

        $solicitud->descripcion=$request->get('descripcion');
        $solicitud->id_empleador=$request->get('id_empleador');
        $solicitud->id_empleado=$request->get('id_empleado');
        //$curso->id_empleado=\Auth::user()->id;

        //dd($request);
        $solicitud->save();
        // dd(request()->all());

       //return redirect()->route('empleado.show', $aux);
        return back()->with('message' , 'Creada Correctamente');;
    }

    public function listarsolicitudes($id)
    {
       $solicitud=offer::select('solicitus.*', 'users.*')
       ->join('solicitus', 'solicitus.id_empleado', '=', 'users.id')
       ->orderBy('employees.nombre', 'desc')
       ->where('users.id', '=', $id)
       ->paginate(6);;


       return view ('empleado.perfil', ["empleado"=>$empleado, 'oferta'=>$oferta]);
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
