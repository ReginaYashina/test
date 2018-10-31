@extends('layouts.base')


@section('scripts')
@parent
<script src="{{asset('media/ckeditor/ckeditor.js')}}"></script>
@endsection



@section('content')
				<h2>Оформление заказа</h2>
               <br/>
				<div class="maintext">



            <div class="col-md-6">      
					<div class="card-body">
                                <form method="POST" action="">
                                    @csrf

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


                                    <div class="form-group row" >
                                    	<label for="" class="col-md-2 col-form-label text-md-right">Комментарий к заказу</label>
                                        <div class="col-md-10">
                                    	<textarea rows="10" cols="103" name="body"  class="ckeditor"></textarea>
                                    </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-md-12 col-form-label text-md-right">Выберите способ доставки</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Доставка курьером</option>
                                  <option>Самовывоз</option>
                                  <option>Доставка почтой по РБ</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-md-12 col-form-label text-md-right">Выберите способ оплаты</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Оплата наличными курьеру или при самовывозе</option>
                                  <option>Предоплата через ЕРИП</option>
                                  <option>Оплата по карте </option>
                                </select>
                            </div>




                        </form>
                    </div>






                        
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Оформить заказ
                                </button>
                            </div>
                        
                    </form>
                </div>
            </div>

@endsection