<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Katalog;
use Auth;

class SizeComposer
{
	public function compose (View $view){
		$v_katalogs = Katalog::all();
		$view->with('v_katalogs', $v_katalogs);
	}
}