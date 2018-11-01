<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable=[ //добавляем в модель свойство fillable
	'fio',
	'body',	
    'email',
	'phone',
    'adress',
    'type',
	'pay',
	'comment',
	'user_id',
	'status'
   ];
}

