@extends('layouts.base')

@section('scripts')
@parent
<script src="{{asset('media/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/test.js')}}"></script>
<script src="{{asset('js/order.js')}}"></script>
@endsection

@section('content')
<h2>Корзина</h2>
	<div class="maintext">
		<div class="card-body">
                                <form method="POST" action="{{asset('order')}}">
								 @csrf
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
				<span id="price_{{$key}}">
					{{$products[$key]->price}}
				</span>
				</td><td>
					<input type="number" name="{{$key}}" data-id="{{$key}}" min=1 max=100 value='{{$value}}' class="count"/>
				</td>
				<td>
					<span id="count_{{$key}}">
					{{$count}}
					</span>
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
		
		
		 <div class="right"><button type="button" class="btn btn-primary " id="ord"  >Перейти к оформлению заказа</button></div>

	</div>
	
	<div id="of"  class="ofrml">
	 <div class="col-md-6">      
					
                                   

                                    <div class="form-group row">
                                        <label for="name" class="col-md-2 col-form-label text-md-right">ФИО<i>*</i></label>

                                        <div class="col-md-10">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-2 col-form-label text-md-right">E-Mail<i>*</i></label>

                                        <div class="col-md-10">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-md-2 col-form-label text-md-right">Адрес<i>*</i></label>

                                        <div class="col-md-10">
                                            <input id="address" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="address" required>

                                            @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-2 col-form-label text-md-right">Телефон<i>*</i></label>

                                        <div class="col-md-10">
                                            <input id="phone" type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-md-5 col-form-label text-md-right">Выберите способ доставки</label>
										
						<div class="col-md-7">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Доставка курьером</option>
                                  <option>Самовывоз</option>
                                  <option>Доставка почтой по РБ</option>
                                </select>
						</div>
                            </div>
                            
                            <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-md-5 col-form-label text-md-right">Выберите способ оплаты</label>
										<div class="col-md-7">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Оплата наличными курьеру или при самовывозе</option>
                                  <option>Предоплата через ЕРИП</option>
                                  <option>Оплата по карте </option>
                                </select>
								</div>
                            </div>
         
                                
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        
						
						 <div class="form-group row" >
                                    	<label for="" class="col-md-2 col-form-label text-md-right">Комментарий к заказу</label>
                                        <div class="col-md-10">
                                    	<textarea rows="8" cols="103" name="body"  class="ckeditor"></textarea>
                                    </div>
                                    </div>
						
						
						
                            




                        
                    </div>
				






                        
                            <div class="row right">
                                <button type="submit" class="btn btn-primary">
                                    Оформить заказ
                                </button>
                            </div>
                        
                    </form>
				</div>
	
@endsection