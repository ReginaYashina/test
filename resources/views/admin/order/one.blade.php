@extends('admin.layouts.master')

@section('content')

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-customView_index-list') }}</div>
        </div>
        <div class="portlet-body">
			<table width="100%" class="table-bordered table-striped">
				<tr>
					<th>N заказа</th>
					<th>Товар</th>
					<th>Количество</th>
					<th>Цена</th>
					<th>Способ доставки</th>
					<th>Способ оплаты</th>
					<th>Статус</th>
					<th></th>
					<th></th>
				</tr>
				
				
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
			
			</table>
			@php
				$arr=unserialize($obj->body);
			@endphp
			@foreach($arr as $key=>$value)
				товар:{{$key}},
				количество:{{$value}}<hr/>
			@endforeach
			
			
			
			
			
			
		
        </div>
	</div>

@endsection