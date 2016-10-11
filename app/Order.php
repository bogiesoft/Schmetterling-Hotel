<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';

	protected $fillable = array('currentprice', 'ordertime', 'reservationid', 'priceid');
}