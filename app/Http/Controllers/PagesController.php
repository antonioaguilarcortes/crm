<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function page(){
		return view('inicio');
	}
	public function activity(){
		return view('actividades');
	}
	public function directory(){
		return view('directorio');
	}
}
