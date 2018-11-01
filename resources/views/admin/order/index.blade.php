@extends('admin.layouts.master')

@section('content')

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-customView_index-list') }}</div>
        </div>
        <div class="portlet-body">
			<table width="100%" class="table-bordered table-striped">
				<tr>
					<th>ФИО</th>
					<th>E-mail</th>
					<th>Телефон</th>
					<th>Адрес</th>
					<th>Способ доставки</th>
					<th>Способ оплаты</th>
					<th>Статус</th>
					<th>Заказ</th>
					<th>Действие</th>
				</tr>
				
				@foreach($all as $one)
				<tr>
					<td>{{$one->fio}}</td>
					<td>{{$one->email}}</td>
					<td>{{$one->phone}}</td>
					<td>{{$one->adress}}</td>
					<td>{{$one->type}}</td>
					<td>{{$one->price}}</td>
					<td>{{$one->status}}</td>
					<td><a href="{{asset('admin/order/one/'.$one->id)}}">Детали заказа</a></td>
					<td></td>
				
				
				
				
				
				
				</tr>
				@endforeach
			</table>
			{!!$all->links()!!}
        </div>
	</div>

@endsection