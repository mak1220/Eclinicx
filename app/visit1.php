<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit1 extends Model
{
    protected $fillable=['visit2_id','Reason','Referee','Doctor','Date','Amount'];
}
