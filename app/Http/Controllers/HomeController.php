<?php

namespace App\Http\Controllers;

use App\Fitback;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function postIndex(){
		//dd($_POST);
		$body=$_POST['body'];
		$obj=new Fitback;
		$obj->body=$body;
		$obj->user_id=Auth::user()->id;
		$obj->save();
		return redirect('/home');
	}
	
}
