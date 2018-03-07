<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable=['full_name','birth_date','email','password','address','contact_no'];
}
