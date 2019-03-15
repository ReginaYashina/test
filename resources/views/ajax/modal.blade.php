<div class="container-fluid mdl">
	<div class="row"> 
		<div class="col-lg-3" >
@if ($obj->picture)
		<img class="product" src="{{asset('uploads/thumb/'.$obj->picture)}}" id ="{{$obj->id}}"/>
	@else
		<img class="product" src="{{asset('media/img/no_photo.png')}}" id ="{{$obj->id}}"/>
	@endif
</div>
<div class="col-lg-8" >
	<h2>
{{$obj->name}}
</h2>
<div>{!!$obj->body!!}</div>
<a href ="{{asset('basket/add/'.$obj->id)}}">
	Положить в корзину
	</a>
</div>
</div>
</div>