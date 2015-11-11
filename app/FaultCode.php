<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaultCode extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'fault_code';
    protected $fillable = array('code','meaning');
}
