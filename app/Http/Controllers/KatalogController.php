<?php

namespace App\Http\Controllers;

use App\Katalog;

class KatalogController extends Controller
{
   public function getIndex($id=null){
	   $obj=Katalog::find($id);
	   return view('katalog', compact('obj'));
   }
}
