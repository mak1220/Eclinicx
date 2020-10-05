<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable=['MRNX','Name','Gender','Age','Address','Phone','Discount','DiscountCash'];
}
