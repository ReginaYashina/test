<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Order;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order::created(function($obj){
			if(isset($obj->email)){
				$user_email=$obj->email;
				$name=$obj->fio;
			}
			elseif(Auth::user()){
				$user_email=Auth::user()->email;
				$name=Auth::user()->name;
			}
			
			
		
		$thema_user='Уважаемый(-ая) '.$name.'! Вам сообщение!';
		$body_user='<h1>Текст</h1>';
		$thema_admin='<h1>Уважаемый администратор!</h1>';
		$body_admin='<h1>Текст</h1>';
		//create header
		$header='MIME-Version:1.0'."\r\n";
		$header='Content-type:text/html; charset=UTF-8'."\r\n";
		$header='From: '.env('MAIL_FROM_ADDRESS')."\r\n";
		@mail($user_email,$thema_user,$body_user,$header);
		@mail(env('MAIL_FROM_ADDRESS'),$thema_admin,$body_admin);
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
