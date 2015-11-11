<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmReport extends BaseModel
{
    //create the tables parameters here
    protected $primaryKey = 'id';
    protected $table = 'cmreport';
    protected $fillable = array(
	'jobId',
	'location',
	'dateStarted',
	'timeStarted',
	'jobDescription',
	'planner',
	'technician',
	'supervisor',
	'faultCode',
	'repairCode',
	'rootCauseCode',
	'dateEnded',
	'timeEnded',
	'engrRemark');
}
