<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\offer;
use App\Category;
use Carbon\Carbon;
use App\User;
use Session;
use DB;
use Auth;
use Cache;
use Image;
use Validator;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado=employee::orderBy('id', 'desc')->paginate(25);;
        return view ('empleado.index', ["empleado"=>$empleado]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado= new employee;
       

        if($request->hasFile('foto'))
        {
            $foto= $request->file('foto');
            $filename= time(). '.'. $foto->getClientOriginalExtension();
            Image::make($foto)->resize(520,640)->save(public_path('/img/usuario/'.$filename));
            $empleado->foto=$filename;
        }   

        if($request->hasFile('record_policia'))
        {
            $record_policia= $request->file('record_policia');
            $filename= time(). '.'. $record_policia->getClientOriginalExtension();
            Image::make($record_policia)->resize(750,500)->save(public_path('/img/record/'.$filename));
            $empleado->record_policia=$filename;
        }  

        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->cedula=$request->get('cedula');
        $empleado->profesion=$request->get('profesion');
        $empleado->ciudad=$request->get('ciudad');
        $empleado->municipio=$request->get('municipio');
        $empleado->nivel_academico=$request->get('nivel_academico');
        $empleado->telefono=$request->get('telefono');
            //$empleado->id_usuario=$request->get('id_usuario');
        // slug
        // para capturar el id del usuario que esta logeado
        $empleado['id_usuario']=Auth::user()->id;
        $aux['id_usuario']=Auth::user()->id;
        $aux2=$aux;
        $empleado->save();
        // dd(request()->all());

        return redirect()->route('empleado.show', $aux2);

        //return redirect('/perfil')->with('message' , 'Creada Correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listallcursos($id)
    {
         $empleado=DB::table('employees as em')
        ->select('em.*')
        ->where('em.id', '=', $id)
        ->first();

           return view ('cursos.list', ['curso'=>$curso]);

    }
    public function perfil ($id)
    {

        
         $empleado=DB::table('employees as e')
        ->join('users as u', 'e.id_usuario', '=', 'u.id')
        ->select('u.*', 'e.*')
        ->where('u.id', '=', $id)
        ->first();

        $oferta=offer::select('offers.*', 'employees.*','categories.*')
        ->join('employees', 'employees.id', '=', 'offers.id_empleado')
        ->join('categories', 'categories.id', '=', 'offers.id_categoria')
        ->orderBy('employees.nombre', 'desc')
         ->where('offers.id_empleado', '=', $id)
        ->paginate(6);;


        return view ('empleado.perfil', ["empleado"=>$empleado, 'oferta'=>$oferta]);

    }
    public function show($id)
    {
        $categoria = Category::all();
        //return view('empleado.show')->with('categoria',$categoria);
        $curso=DB::table('courses as c')
        ->join('employees  as e', 'e.id', '=', 'c.id_empleado')
        ->select('c.*', 'e.*')
        ->orderBy('c.id', 'desc')
        ->paginate(7);

        $empleado=DB::table('employees as em')
        ->select('em.*')
        ->where('em.id', '=', $id)
        ->first();

        

       $proformas=DB::table('solicitus as s')
        ->join('employees  as e', 'e.id', '=', 's.id_empleado')
        ->select('s.*', 'e.*')
        ->where('e.id', '=', $id)
        ->paginate(8);


           return view ('empleado.show', ['curso'=>$curso, 'empleado'=>$empleado,'categoria'=> $categoria, 'proformas'=>$proformas]);
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
