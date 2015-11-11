<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends BaseModel
{
    //create the tables parameters here
    protected $primaryKey = 'id';
    protected $table = 'locations';
    protected $fillable = array(
	'new_house_address',
	'street_name',
	'occupants_name',
	'occupants_number');
    public static $rules = array(
	'new_house_address' =>'required|string',
	'street_name' =>'required|string',
	'occupants_name' =>'required|string',
	'occupants_number'=>'required|numeric'
	
    );
}
