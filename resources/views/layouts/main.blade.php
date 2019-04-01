<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="description" content="1-3 предложения">
	<meta name="keywords" content="через запятую ключевики">
	<meta name="author" content="Yashina">
	<title>Lorem</title>	
@section('styles')
	<link type="text/css" rel=" stylesheet" href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" />
	<link type="text/css" rel=" stylesheet" href="{{asset('media/css/style.css')}}" />
@show
@section('scripts')
	<script src="{{asset('js/app.js')}}"></script>
@show
</head>
<body>
	<header class="container-fluid" id="header">
		<div class="row resp-top">
			<div class="col-lg-2 small-logo"><img id="logo" src="{{asset('media/img/logo.png')}}" /></div>
			<h1 class= "col-lg-8" id="logotext">Lorem ipsum</h1>
			<div class="col-lg-2">
				<div class="row resp-right-col">
					@guest
						<div class="col-lg-12"><a class="login text-lg-right text-md-left" href="{{ route('login') }}">{{ __('Вход') }}</a></div>
						@if (Route::has('register'))
						<div class="col-lg-12 col-md-6"><a class="reg text-lg-right text-md-left" href="{{ route('register') }}">{{ __('Регистрация') }}</a></div>
						@endif
							@else							                            
								<div class="col-lg-12"><a class="login-name text-lg-right text-md-left" href="{{asset('home')}}">{{ __('Личный кабинет  |  ') }}<span>{{ Auth::user()->name  }}</span></a></div>
								<div class="col-lg-12 col-md-6"><a class="reg text-lg-right text-md-left" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">{{ __('Выход') }}
								</a></div>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
								</form>
								  <!-- </div> -->  
					@endguest
						<div class="col-lg-12 col-md-6"><a class="basket text-lg-right" href="{{asset('basket')}}">Корзина ({{$cookie_count}})</a></div>
				</div>
			</div>
		</div>
	</header>
@include('templates.topmenu')
	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-2">

				</div>

				<div class="col-lg-8">
@yield('content')
				</div>

				<div class="col-lg-2">

				</div>	
		</div>
	</div>

		<br style="clear: both">
	
	@include('templates.footer')	

	</body>










	