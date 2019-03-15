@extends('layouts.base')
@section('content')
				
				<div class="maintext">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
			<!-- <img class="kategory-img" src="../../public/media/img/flowers.jpg" alt=""> -->
			{{$obj->picture}}
			<img class="kategory-img" src="{{asset('uploads/thumb/'.$obj->picture)}}" id ="{{$obj->id}}"/>
		</div>
		<div class="col-lg-10 kategory-bcgr">
			<h2 class = "kategory-name">{{$obj->name}}</h2>
			{!!$obj->body!!}
		</div>
	</div>
</div>
<hr/>












				</div>
@endsection