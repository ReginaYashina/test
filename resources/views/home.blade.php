@extends('layouts.main')
@section('scripts')
@parent
<script src="{{asset('media/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form method="post" action="{{('home')}}">
					   {!!csrf_field()!!}
  <div class="form-group">
  <p><b>Введите ваш отзыв:</b></p>
  <p><textarea rows="10" cols="105" name="body"  class="ckeditor"></textarea></p>
    <p><label><input type="submit" value="Отправить" name="send"></label></p>
    
  </div>
  
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
