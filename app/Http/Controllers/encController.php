<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encController extends Controller
{    
	public function index()
	{
		return view('enc1');
	}

	public function index2()
	{
		return view('enc2');
	}

	public function index3()
	{
		return view('enc3');
	}
}
