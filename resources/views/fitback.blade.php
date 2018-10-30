@extends('layouts.base')
@section('content')
				<h2>Отзывы</h2>
				<div class="maintext">
@foreach($feeds as $one)
	<div class="room">
		{!!$one->body!!}
			<div class="time">{{$one->created_at}}</div>
	</div>
@endforeach
	


				</div>
@endsection