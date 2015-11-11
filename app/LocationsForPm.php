<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationsForPm extends Model
{
    //create the tables parameters here
    protected $primaryKey = 'id';
    protected $table = 'locations_for_pm';
    protected $fillable = array(
	'location',
	'numberOfHouses');
    
    public static $rules = array(
	'location' => 'required|string',
	'numberOfHouses' => 'required|integer'
    );
}
