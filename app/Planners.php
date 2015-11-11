<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planners extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'planners';
    protected $fillable = array('name');
}
