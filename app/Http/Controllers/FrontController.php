<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\offer;
use App\category;


class FrontController extends Controller
{
	public function index ()
	{

		$jober=employee::select('employees.*')
        ->orderBy('employees.id', 'desc')
        ->paginate(4);;

        $oferta=offer::select('offers.*', 'employees.*','categories.*')
        ->join('employees', 'employees.id', '=', 'offers.id_empleado')
        ->join('categories', 'categories.id', '=', 'offers.id_categoria')
        ->orderBy('employees.nombre', 'desc')
        ->paginate(6);;

       $categorias=category::select('categories.*')
       ->orderBy('categories.nombre', 'desc')
       ->paginate(6);

		return view ('index', ["jober"=>$jober, 'oferta'=> $oferta, 'categorias'=>$categorias]);
	}
}
