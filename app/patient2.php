<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient2 extends Model
{
    protected $fillable=['patient_id','cnic','Reference','Tag','Remark','File'];
   
}
