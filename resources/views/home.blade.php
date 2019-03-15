@extends('layouts.main')
@section('scripts')
@parent
<script src="{{asset('media/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
          @endif
<h2 class = "feedback">Ваши заказы:</h2>
<p>должны выводиться заказы</p>

            <form method="post" action="{{('home')}}">
					     {!!csrf_field()!!}
              <!-- <div class="form-group"> -->
                <p class = "feedback">Введите ваш отзыв:</p>
                <p class = "feedback-area"><textarea  name="body"  class="ckeditor"></textarea></p>
                <p class="text-right" ><label><input type="submit" value="Отправить" name="send" class = "feedback-area"></label></p>
              <!-- </div> -->
            </form>

@endsection
