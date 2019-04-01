<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
   public function getIndex($id=null){
	   $cats=Category::find($id);
	   return view('katalog', compact('cats'));
   }

		public function getOne($id=null){
		$obj=Product::find($id);
		return view('product', compact('obj'));
	}

}
