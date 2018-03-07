<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['name','pickup_date','pickup_location','drop_location','email','contact_no'];
}
