<?php

namespace App\Http\Controllers\Fibra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
	function index() 
	{
		return "Lista instalacion";
	}

	// guarda una nueva entrada en la lista de espera
	public function store(Request $request) {
		// validamos formulario
        $validatedData = $this->validate($request,[
            'first_name' =>    'required',
            'phone' => 'required',
            'city' => 'required',
            'email' => 'required'
        ]);

        // datos para insertar en la base de datos
        $data = [
        	'first_name' => $request->first_name,
        	'phone' => $request->phone,
        	'city' => $request->city,
        	'email' => $request->email
        ];
        return $data;
	}
    
}
