<?php

namespace App\Http\Controllers\Fibra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;

class MainController extends Controller
{
	protected $client;

	/**
	* constructor
	* @return void
	* @param models
	*/
	public function __construct(Client $client) {
		$this->client = $client;
	}


	function index() {
		return "Lista instalacion";
	}

	// guarda una nueva entrada en la lista de espera
	public function store(Request $request) {
		// validamos formulario
        $validatedData = $this->validate($request,[
            'first_name' =>    'required',
            'phone' => 'required',
            'post_code' => 'required',
            'email' => 'required | email',
            'confirm_email' => 'required | email '
        ]);

        // datos para insertar en la base de datos
        $data = [
        	'first_name' => $request->first_name,
        	'phone' => $request->phone,
        	'post_code' => $request->post_code
        ];

        // validate email
        if ($request->email === $request->confirm_email) {
        	$data['email'] = $request->email;
        }

        if ($client = $this->client->firstOrCreate(['email' => $data['email']],$data)) {
        	// preparo el mensaje para la view success_message
        	$message = [ 'title' => '¡Gracias '.ucfirst($client->first_name).'!',
        				'body' => 'Estas muy cerca de entrar en la maravillosa comunidad de la fibra Digi.
        				En poco tiempo recibiras una llamada de nuestra parte donde te explicaremos 
        				todos los detalles sobre nuestra fibra.',
        				'footer' => 'Nos vemos online.'
        				];
        	return view('success_message',compact('message')); 
        } else {
        	return "error";
        }
	}
    
}
