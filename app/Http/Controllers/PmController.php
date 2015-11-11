<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PmReport;
use App\Libraries\MelportCore;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;
use App\LocationsForPm;
use Illuminate\Support\Facades\Input;
class PmController extends Controller
{
  
  //calls the default constructor
  public function __construct()
    {
    parent::__construct();
        }

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //shows new pm job view
    public function newPmJob()
      {
      return view('pm_new_job',
	      array(
		  'locations'=>  \App\LocationsForPm::all(),
		  'jobId' => \App\Libraries\MelportCore::getPmJobId()
	      ));
      }
      //processes new pm job
    public function newPmJobSubmit()
      {
	//get the inputs and validate and then creat report
	PmReport::create(array(
	    'jobId' =>Request::get('job_id'),
	    'location'=>Request::get('location'),
	    'dateDone' =>Request::get('date_done'),
	    'callsGenerated' => 0,
	    'callsCompleted' => 0,
	    'noAccess' => 0,
	    'noAccessResolved' => 0,
	    'inspection' => 0,
	    'housesServiced' =>Request::get('houses_serviced'),
	    'dateNext' =>Request::get('date_next'),
	    'engrRemark'=>Request::get('engr_remark')
	));
	
	return Redirect::to('/pm')->with('message','New Job Added Succefully. You can view the report to update the job.');
      
      }
      
      //adds a new location
      public function addLocation(){
	//create a new location here
	$validator = Validator::make(Input::all(),LocationsForPm::$rules);
	
	if($validator->passes())
	  {
	  LocationsForPm::create(array(
		  'location' => Request::get('location'),
		  'numberOfHouses'=> Request::get('number_of_houses')
		  ));
	  return Redirect::to('/pm')
		  ->with('message','Location Added Succsfully');
	  }else
	  {
	  return Redirect::to('/pm')
		  ->with('message','Something Went Wrong. Location was not added!');
	  }
      }
      public function updatePmJobSubmit()
      {
	
      }
      
      //returns all the pm reports
      public function report()
	{
	
	}
	
	//exports the pm job
      public function exportReport()
	  {
	  
	  }
	  //returns the pm job view for update
      public function updatePmJob()
	    {
	    
	    }

	    //updates a particular job
      public function pmReportUpdate($id)
	{
	$report =  PmReport::find($id);
	return view('pmUpdateJobView',array('report' => $report));
	 
	}
      //deleteds a particular job
      public function pmReportDelete($id)
	{
	$report =  PmReport::find($id);
	$report->delete();
	return Redirect::to('/pm')
		  ->with('message','Report Deleted Succefully!');
	
	}
	
	//tags a particular report
	public function pmReportTag($id)
	  {
	  $report =  PmReport::find($id);
	  $report->tag = 1;
	  $report->save();
	  return Redirect::to('/pm')
		  ->with('message','Report Taged!');
	  }
	     
}
