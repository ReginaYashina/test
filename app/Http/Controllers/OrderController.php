<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Auth;
use App\Order;
use App\Libs\Cookie;

class OrderController extends Controller
{
   /*public function post(){
		dd($_POST);
	}*/
	
	public function postOrder(OrderRequest $r){
		$all=[];
		foreach($_POST as  $key => $valye){
			$id=(int)$key;
				if($id>0){
					$all[$id]=$valye;
				}	
		}
		
		//$all
		$body = serialize($all);
		$r['user_id'] = (Auth::guest())? 0:Auth::user()->id;
		$r['body']=$body;
		Order::create($r->all());
		
		//подключаем класс в use (сверху)
		//$cook=new Cookie;
		//$cook->deleteAll();
		\App::make('App\Libs\Cookie')->deleteAll(); //предпочтительнее такой вариант. При этом use прописывать не надо
		
		return redirect()->back();
	}
}
