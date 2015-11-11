<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairCode extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'repair_code';
    protected $fillable = array('code','meaning');
}
