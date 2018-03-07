<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['pickup_city','drop_city','pickup_time','pickup_date','travel_type'];
}
