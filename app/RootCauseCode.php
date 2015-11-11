<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RootCauseCode extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'root_cause_code';
    protected $fillable = array('code','meaning');
}
