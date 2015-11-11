<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

use App\Location;
use App\ReportCode;
use App\Planners;
use App\Technicians;
use App\Supervisors;
use App\CmReport;
use App\RepairCode;
use App\FaultCode;
use App\RootCauseCode;

class CmController extends Controller
{
  //defining all my variables
  var $locations;
  var $reportCodes;
  var $planners;
  var $technicians;
  var $supervisors;
  var $faultCodes;
  var $repairCodes;
  var $rootCauseCode;
  var $reports;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  //this function shows all the reports
  
  //call the default contsructor
  public function __construct()
    {
    
      $this->locations = Location::all(array('id','new_house_address','street_name'));
      $this->reportCodes = ReportCode::all(array('code','meaning'));
      $this->planners = Planners::all(array('name'));
      $this->technicians = Technicians::all(array('name'));
      $this->supervisors = Supervisors::all(array('name'));
      $this->repairCodes = RepairCode::all(array('code','meaning'));
      $this->faultCodes = FaultCode::all(array('code','meaning'));
      $this->rootCauseCode = RootCauseCode::all(array('code','meaning'));
      $this->reports = CmReport::all();
    }
    
    //returns all the reports
  public function reports()
      {
      return view('cm_reports',array(
	  'title'=>'New Job',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()
	      ));
      }
    
    //helps to update the report
    public function cmReportUpdate()
      {
      return view('cm_reports',array(
	  'title'=>'New Job',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()
	      ));
      }
      
      //helps delete a report
     public function cmReportDelete()
      {
      return view('cm_reports',array(
	  'title'=>'New Job',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()
	      ));
      }
      
      //tags a report
    public function cmReportTag()
      {
      return view('cm_reports',array(
	  'title'=>'New Job',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()
	      ));
      }
      
    //this functio creates new job
    public function newJob()
      {
      //get all the models that we shall be using;
      return view('cm_new_job',array('title'=>'New Job',
	  'locations'=>$this->locations,
	  'reportCodes' =>$this->reportCodes,
	  'planners' =>$this->planners,
	  'technicians' =>$this->technicians,
	  'supervisors' =>$this->supervisors
	  ));
      }
      
    //this function shows update job view
    public function updateJob()
      {
      //you shall grab the job id , locate the particular report
      $id = Request::get('job_id');
      $report = CmReport::where('JobId','=',$id)->first();
      if($report != null)
	{
	 return view('cm_update_job',array(
	     'title'=>'Job Update','report' =>$report,
	     'faultCodes' => $this->faultCodes,
	     'repairCodes' => $this->repairCodes,
	     'rootCauseCodes' =>$this->rootCauseCode,
	     'locations' => $this->locations
		 
	  ));
	}
            else
	{
	
	      //tell the user that such a job is not recorded
	     return Redirect::to('/cm')
	     ->with('message','Such job does not exist in the database, please check the job id.');
	}
     
      }
      
    public function cmJobUpdateSubmit(){
      
     //grab all the changes
      $report = CmReport::find(Request::get('id'));
      $report->faultCode = Request::get('fault_code');
      $report->repairCode = Request::get('repair_code');
      $report->rootCauseCode = Request::get('root_cause_code');
      $report->dateEnded = Request::get('date_ended');
      $report->timeEnded = Request::get('time_ended');
      $report->engrRemark = Request::get('engr_remark');
      $report->save();
      
      return Redirect::to('/cm');
    }

        //this function shows weekly Report View      
    public function weeklyReport()
      {
      return view('cm_reports',array(
	  'title'=>'Weekly Report',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()
	  ));
      }
    //this function shows monthly report view      
    public function monthlyReport()
      {
      return view('cm_reports',array(
	  'title'=>'Monthly Report',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()));
      }
     
    //this function shows location report view
    public function locationReport()
      {
      return view('cm_reports',array(
	  'title'=>'Location Report',
	  'reports'=>$this->reports,
	  'locations' => \App\Location::all()));
      }
      
   //this function shows view that is used to add and update new call at the same time
    public function newUpdate()
      {
     //get all the models that we shall be using;
      return view('cm_new_update_job',array('title'=>'New Job',
	  'locations'=>$this->locations,
	  'reportCodes' =>$this->reportCodes,
	  'planners' =>$this->planners,
	  'technicians' =>$this->technicians,
	  'supervisors' =>$this->supervisors,
	  'faultCodes' => $this->faultCodes,
	  'repairCodes' => $this->repairCodes,
	  'rootCauseCodes' =>$this->rootCauseCode
	  ));
      }

    
   //this function adds a new job to records
   public function cmJobSubmit()
     {
     CmReport::create(array(
	 'jobId'=>Request::get('job_id'),
	 'location'=>Request::get('location'),
	 'dateStarted'=>Request::get('date_started'),
	 'timeStarted'=>Request::get('time_started'),
	 'jobDescription'=>Request::get('job_desc'),
	 'planner'=>Request::get('planner'),
	 'technician'=>Request::get('technician'),
	 'supervisor'=>Request::get('supervisor')  
     ));
     
      return Redirect::to('/cm');
     }
     
     
     //adds a new Location
   public function addLocation()
     {
     //create a new location and add
     Location::create(array(
	'new_house_address' => Request::get('new_house_address'),
	 'street_name' => Request::get('street_name'),
	 'occupants_name' => Request::get('occupants_name'),
	 'occupants_number' => Request::get('occupants_number')
     ));
     return Redirect::to('/cm')
	     ->with('message','Location Added Successsfully');
     }
     
     //thid functions add a new Code
     public function addReportCode()
       {
       ReportCode::create(array(
	   'code' => Request::get('code'),
	   'meaning' => Request::get('meaning')
       ));
       return Redirect::to('/cm')
	     ->with('message','Report Code Added Successsfully');
       }
       
       public function addRepairCode()
       {
       RepairCode::create(array(
	   'code' => Request::get('code'),
	   'meaning' => Request::get('meaning')
       ));
       return Redirect::to('/cm')
	     ->with('message','Repair Code Added Successsfully');
       }
       
       public function addFaulttCode()
       {
       FaultCode::create(array(
	   'code' => Request::get('code'),
	   'meaning' => Request::get('meaning')
       ));
       return Redirect::to('/cm')
	     ->with('message','Fault  Code Added Successsfully');
       }
       
       public function addRootCauseCode()
       {
       RootCauseCode::create(array(
	   'code' => Request::get('code'),
	   'meaning' => Request::get('meaning')
       ));
       return Redirect::to('/cm')
	     ->with('message','RootCause Code Added Successsfully');
       }
    
}
