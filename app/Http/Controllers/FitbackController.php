<?php

namespace App\Http\Controllers;

use App\Fitback;

class FitbackController extends Controller
{
    public function getIndex(){
		$feeds=Fitback::where('showhide', 'show')->orderBy('id','DESC')->paginate(20);
		return view ('Fitback', compact('feeds'));
	}
}
