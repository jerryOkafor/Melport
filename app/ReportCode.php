<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCode extends Model
{
    //create your variables here
    protected $primaryKey = 'id';
    protected $table = 'report_code';
    protected $fillable = array('code','meaning');
}
