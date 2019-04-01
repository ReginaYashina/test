@extends('layouts.base')
@section('scripts')
@parent
	<script src="{{asset('js/modal.js')}}"></script>
@endsection
@section('content')
				
				<div class="maintext kategory-img">
<div class="container-fluid ">
	<div class="row ">
		<div class="col-lg-2">
		</div>
		<div class="col-lg-10 kategory-bcgr">
			<h2 class = "kategory-name">{{$cats->name}}</h2>
			{!!$cats->body!!}
		</div>
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







</div>

				</div>
@endsection