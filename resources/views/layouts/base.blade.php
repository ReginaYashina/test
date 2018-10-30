<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="1-3 предложения">
		<meta name="keywords" content="через запятую ключевики">
		<meta name="author" content="Yashina">
		<title>Название сайта</title>
		<link type="text/css" rel=" stylesheet" href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" />
		<link type="text/css" rel=" stylesheet" href="{{asset('media/css/style.css')}}" />
		@section('styles')
		@show
		@section('scripts')
		@show
	</head>
	<body>
		<header id="header">
			<h1 id="logotext">Название сайта</h1>
			<img id="logo" src="{{asset('media/img/logo.png')}}" />
		</header>



@include('templates.topmenu')
		<div>
		<div>
			<div class="col-md-2">
			@foreach($v_katalogs as $one)
			<a href="{{asset('katalog/'.$one->id)}}" class="btn btn-default btn-block" >{{$one->name}}</a>
			@endforeach
				<!--<a href="{{asset('#')}}" class="btn btn-default btn-block">Ссылка1</a>
				<a href="{{asset('#')}}" class="btn btn-success btn-block">Ссылка2</a>-->
				<a href="{{asset('fitback')}}" class="btn btn-primary btn-block">Отзывы</a>
			</div>
			<div class="col-md-8">
@yield('content')
			
			</div>
			<div class="col-md-2"><!--pogoda.by-->
<!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->

<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
</td></tr>
<tr><td>

<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
<tr><td>
<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_3.js"></script>
</td></tr>
</table>

</td></tr>

<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
</td></tr>
</table></div>	
		</div>
		</div>
		<br style="clear: both">
		<a href="{{asset('basket')}}" class="btn btn-block btn-lg ptn-primary">Корзина ({{$cookie_count}})</a>
		<div class="footer">
			&copy; Yashina
		</div>
			
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>