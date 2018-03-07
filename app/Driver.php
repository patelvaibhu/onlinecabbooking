<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable=['full_name','license_no','adharcard_no','election_card','address','city','contact_no'];
}
