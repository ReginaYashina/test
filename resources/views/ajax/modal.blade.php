<h2>
{{$obj->name}}
</h2>
<div>{!!$obj->body!!}</div>
@if ($obj->picture)
		<img class="product" src="{{asset('uploads/thumb/'.$obj->picture)}}" id ="{{$obj->id}}"/>
	@else
		<img class="product" src="{{asset('media/img/no_photo.png')}}" id ="{{$obj->id}}"/>
	@endif