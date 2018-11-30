<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class FrontController extends Controller
{
	public function index ()
	{

		$jober=employee::select('employees.*')
        ->orderBy('employees.id', 'desc')
        ->paginate(4);;

		return view ('index', ["jober"=>$jober]);
	}
}
