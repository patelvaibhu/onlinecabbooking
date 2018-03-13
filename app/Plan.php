<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable=['pickup_city','drop_city','price','location','tolltax'];
}
