@extends('layouts.base')
@section('content')
<h2>{{$obj->name}}</h2>
	<div class="maintext">
		
			{!!$obj->body!!}
		
	</div>
	
	<a href ="{{asset('basket/add/'.$obj->id)}}">
	Положить в корзину
	</a>
@endsection