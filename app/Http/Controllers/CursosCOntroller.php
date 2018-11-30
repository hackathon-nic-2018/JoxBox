<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use Auth;

class CursosCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listall($id)
    {
        $team=DB::table('courses as c')
        ->join('employees  as e', 'e.id', '=', 'c.id_empleado')
        ->join('categoris as c', 'p.categoria_id', '=', 'c.id')
        ->select('c.*', 'e.*')
        ->orderBy('c.id', 'desc')
        ->paginate(7);

        return view('cursos.list', ["cursos"=>$cursos]);
    }

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
       $curso= new course;

       $curso->curso=$request->get('curso');
       $curso->fecha_inicio=$request->get('fecha_inicio');
       $curso->fecha_fin=$request->get('fecha_fin');
       $curso->estado=$request->get('estado');
       $curso->id_empleado=$request->get('id_empleado');
        //$curso->id_empleado=\Auth::user()->id;
      

       
        //dd($request);
       $curso->save();
        // dd(request()->all());

       //return redirect()->route('empleado.show', $aux);
        return back();
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
