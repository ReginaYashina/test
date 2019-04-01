<?php

namespace App\Http\Controllers;

use App\Fitback;
use App\Order;
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

     public function getIndex(){
         $order=Order::all();
         // $order->user_id=Auth::user()->id;
         return view ('home', compact('order'));
         // dd($order);
     }

    //     public function indexAll()
    // {
    //     $all=Order::orderBy('id','DESC')->paginate(10);

    //     return view('home', compact('all'));
    // }
    
    // public function getIndex($id=null){
    //     $obj=Order::find($id);
    //     return view('home-order/{id}', compact('obj'));
    // }

}
