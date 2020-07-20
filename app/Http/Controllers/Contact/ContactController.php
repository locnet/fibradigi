<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
	protected $contact;

	public function __construct(Contact $contact) {
		$this->contact = $contact;
	}
    
	/**
	* @return view
	*/
    public function create(Request $request) {
    	return view('contact.contact');
    }

    /**
    * @return
    */
    public function save(Request $request) {

    	// validate
    	$this->validate($request,[
    		'first_name' =>    'required',
            'phone' => 'required',
            'post_code' => 'required',
            'email' => 'required | email',
            'confirm_email' => 'required | email ',
            'message' => 'required | min:30'
    		]);

    	 // datos para insertar en la base de datos
        $data = [
        	'first_name' => $request->first_name,
        	'phone' => $request->phone,
        	'post_code' => $request->post_code,
        	'message' => $request->message
        ];

        // validate email
        if ($request->email === $request->confirm_email) {
        	$data['email'] = $request->email;
        }
    	

    	// nuevo registro en la base de datos
    	if ($c = $this->contact::firstOrCreate($data)){
    		$message = [ 'title' => '¡Gracias '.ucfirst($c->first_name).'!',
        				'body' => 'Hemos recibido tu consulta.
        				En poco tiempo recibiras una respuesta de nuestra parte.',
        				'footer' => 'Nos vemos online.'
        				];
        	return view('success_message',compact('message')); 
    	}
    }
}
