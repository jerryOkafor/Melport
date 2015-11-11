<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisors extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'supervisors';
    protected $fillable = array('name','division');
}
