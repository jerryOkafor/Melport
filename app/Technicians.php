<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technicians extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'technicians';
    protected $fillable = array('name','division');
}
