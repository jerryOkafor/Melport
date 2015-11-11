<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PmReport extends BaseModel
{
    //define all the variables here
     protected $primaryKey = 'id';
    protected $table = 'ppmreport';
    protected $fillable = array(
	'jobId',
	'location',
	'dateDone',
	'callsGenerated',
	'callsCompleted',
	'noAccess',
	'noAccessResolved',
	'inspection',
	'housesServiced',
	'dateNext',
	'engrRemark'
	);
//	public static $rules = array(
//	    'jobId' =>'required|',
//	    'location',
//	    'dateDone',
//	    'callsGenerated',
//	    'callsCompleted',
//	    'noAccess',
//	    'noAccessResolved',
//	    'inspections',
//	    'housesServiced',
//	    'dateNext',
//	    'engrRemark'
//	);
	
}
