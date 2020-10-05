<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable=['Sup_Name','Sup_Date','Desc','Total','Pur_Proof'];
}
