@extends('layouts.cmLayout')
@section('content')
  @parent
    
  <!-- upper section -->
  <div class="row">
  @include('shared.cm_side_bar')
    <div class="col-sm-9" id="col_center_right">
      	      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-plus-sign"></i> Add New Job 
	 <a href="{{url('/cm')}}"class="pull-right" title="Go Back" ><i class="glyphicon glyphicon-backward"></i></a>
       </h3>
       
            
       <hr>
      
	   <div class="row">
            <!-- center left-->	
         	<div class="col-md-12">

		<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Update Job</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical" method="POST" action="{{url('/cm/job/update/submit')}}">
           {!!csrf_field()!!}
	   <input type="hidden" value="{{$report->id}}" name="id">
	   <div class="control-group">
              <label>Job Id</label>
              <div class="controls">
                <input type="text" name="job_id" value="{{$report->jobId}}" disabled="true" class="form-control">
              </div>
            </div>      
            <div class="control-group">
              <label>Location</label>
              <div class="controls">
                <select class="form-control" disabled="true"  name="location" required="true">
		  <option value="">{{$report->location}}</option>
		  <!--include the location array here's-->	  
		</select>
              </div>
            </div>   
            <div class="control-group">
              <label>Job Description</label>
              <div class="controls">
		<select class="form-control" disabled="true"  name="job_desc" required="true">
		  <option value="">{{$report->jobDescription}}</option>
		  
		</select>
              </div>
            </div> 
            <div class="control-group">
              <label>Planner</label>
              <div class="controls"> 
		<select class="form-control" disabled="true"  name="planner" required="true">
		  <option>{{$report->planner}}</option>
		  </select>
              </div>
            </div>   
	    <div class="control-group">
              <label>Technician</label>
              <div class="controls">
                <select class="form-control" disabled="true"  name="technician" required="true">
		  <option>{{$report->technician}}</option>
		  
		</select>
              </div>
            </div>  
	    <div class="control-group">
              <label>Supervisor</label>
              <div class="controls">
                <select class="form-control"  disabled="true" name="supervisor" required="true">
		  <option>{{$report->supervisor}}</option>		  
		</select>
              </div>
            </div> 
	    <div class="control-group">
              <label>Date Started</label>
              <div class="controls">
                <input type="date" disabled="true" value="{{$report->dateStarted}}" name="date_started" class="form-control">
              </div>
            </div> 
	    <div class="control-group">
              <label>Time Started</label>
              <div class="controls">
                <input type="time" disabled="true" value="{{$report->timeStarted}}" name="time_started" class="form-control">
              </div>
            </div>
	   
	   
	    <div class="control-group">
	       <label>Fault Code</label>
	      <select class="form-control" name="fault_code" required="true">
		  <option value="">Fault Code</option>
		   @foreach($faultCodes as $code)
		   <option value="
			   {{$code->code}}">
		     {{$code->code}}</option>
		   @endforeach
		</select>
              </div>	    
	    <div class="control-group">
	       <label>Repair Code</label>
		<select class="form-control" name="repair_code" required="true">
		  <option value="">Repair Code</option>
		   @foreach($repairCodes as $code)
		   <option value="
			   {{$code->code}}">
		     {{$code->code}}</option>
		   @endforeach
		</select>
              </div>
	    <div class="control-group">
	       <label>Root Cause Code</label>
		<select class="form-control" name="root_cause_code" required="true">
		  <option value="">Root Cause Code</option>
		   @foreach($rootCauseCodes as $code)
		   <option value="
			   {{$code->code}}">
		     {{$code->code}}</option>
		   @endforeach
		</select>
              </div>
	     <div class="control-group">
              <label>Date Ended</label>
              <div class="controls">
                <input type="date" name="date_ended" class="form-control" placeholder="12/11/2015" required="true">
              </div>
            </div> 
	    <div class="control-group">
              <label>Time Ended</label>
              <div class="controls">
                <input type="time" name="time_ended" class="form-control" placeholder="12:30" required="true">
              </div>
            </div> 
	    <div class="control-group">
              <label>Engineer's Remark</label>
              <div class="controls">
                <input type="text" name="time_ended" class="form-control" placeholder="Good" required="true">
              </div>
            </div> 
            <div class="control-group pull-right">	      
              <label></label>
              <div class="controls ">
                <button type="submit" class="btn btn-primary">
                  Post
                </button>
		<button type="submit" class="btn btn-primary">
                  Cancel
                </button>
              </div>
            </div>   
            
          </form>          
          
        </div><!--/panel content-->
      </div><!--/panel-->
              </div><!--/panel-->               
              </div><!--/col-->
             
       </div><!--/row-->
  </div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  @endsection

