@extends('layouts.base')
@section('scripts')
@parent
	<script src="{{asset('js/modal.js')}}"></script>
@endsection
@section('content')
				<!-- <h2>Категории</h2> -->
<div class="maintext">
@foreach ($cats as $cats)
<hr style="clear: both; margin-bottom: -4%; border-style: none">
	<h2>{{$cats->name}}</h2>
	<div>
		{!!$cats->body!!}
	</div>

  @foreach($cats->product()->get() as $one)
			<div class="product-photo" >

						@if ($one->picture)
							<img class="product" src="{{asset('uploads/thumb/'.$one->picture)}}" id ="{{$one->id}}"/>
						@else
							<img class="product no-photo" src="{{asset('media/img/no_photo.png')}}" id ="{{$one->id}}"/>
						@endif
						<p>
							<a href ="{{asset('product/'.$one->id)}}" class="product_link">
								{{$one->name}}
							</a>
						</p>
						<!-- {!!$one->body!!} -->
			</div>


	@endforeach
	
@endforeach


				
@endsection
