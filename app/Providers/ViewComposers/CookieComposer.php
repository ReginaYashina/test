<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;


class CookieComposer
{
	public function compose (View $view){
		$a=0;
		foreach($_COOKIE as $key =>$value){
			$id=(int)$key;
			if($id>0){
				$a++;
			}
		}
		$view->with('cookie_count', $a);
	}
}