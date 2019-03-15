@extends('layouts.base')
@section('content')
<h2 class="product-name">{{$obj->name}}</h2>
	<div class="maintext">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2">
					@if ($obj->picture)
						<img class="product" src="{{asset('uploads/thumb/'.$obj->picture)}}" id ="{{$obj->id}}"/>
					@else
						<img class="product" src="{{asset('media/img/no_photo.png')}}" id ="{{$obj->id}}"/>
					@endif
				</div>
				<div class="col-lg-9">{!!$obj->body!!}
<div class="text-right" >
	<a class="product-in-basket" href ="{{asset('basket/add/'.$obj->id)}}">
	Положить в корзину
	</a></div>
				</div>
			</div>
		</div>

	</div>
	
	
@endsection