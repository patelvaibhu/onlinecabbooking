<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['pickup_city','drop_city','pickup_date','pickup_address','drop_address','car_id','price','driver_id','payment_status'];
}
