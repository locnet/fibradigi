<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // controlador dedicados al FAQ ajustes Digi

    /**
    *@return view index
	*/
	public function index() {
		return view('settings.settings_index');
	}
}
