@extends('layouts.base')
@section('content')
<h2>Корзина</h2>
	<div class="maintext">
		
		<table class="table table-bordered table-striped" width="100%">
			<tr>
				<th>Изображение</th>
				<th>Название</th>
				<th>Цена, руб.</th>
				<th>Количество</th>
				<th>Сумма</th>
				<th>Удалить</th>
			</tr>
			@php
				$counts=0;
				$itog=0;
			@endphp
			@foreach($arr as $key=>$value)
				@php
					$count=$value*$products[$key]->price;
					$counts+=$value;
					$itog+=$count;
				@endphp
			<tr>
				<td>
					@if ($products[$key]->picture)
						<img class="product" src="{{asset('uploads/thumb/'.$products[$key]->picture)}}"/>
					@else
						<img class="product" src="{{asset('media/img/no_photo.png')}}"/>
					@endif
				</td>
				<td>
					{{$products[$key]->name}}
				</td>
				<td>
					{{$products[$key]->price}}
				</td><td>
					{{$value}}
				</td>
				<td>
					{{$count}}
				</td>
				<td>
					<a href="{{asset('basket/dell/'.$key)}}" data-id="{{$key}}"> &times;</a>
				</td>
			</tr>
			@endforeach
			<tr>
				<td  colspan="3">Итого</td>
				<td>{{$counts}}</td>
				<td>{{$itog}}</td>
				<td><a href="{{asset('basket/clear')}}"> Очистить корзину </a></td>
			</tr>
		</table>
		<div class="col-md-10"></div>
		<div class="col-md-2"> <a href="{{asset('orderreg')}}" class="btn btn-primary " >Перейти к оформлению заказа</a> </div>

	</div>
	
@endsection