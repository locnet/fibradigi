<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
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
            'confirm_email' => 'required | email '
    			]);
    	return $request->input();
    }
}
