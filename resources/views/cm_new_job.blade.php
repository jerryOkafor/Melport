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
            <h4>New Corrective Maintenance Job</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical" method="POST" action="{{url('/cm/job/new/submit')}}">
	    <!--adding the csrf_field-->
	    {!!csrf_field()!!}
            <div class="control-group">
              <label>Job Id</label>
              <div class="controls">
                <input type="text" name="job_id" class="form-control" placeholder="081215" required="true">
              </div>
            </div>      
            <div class="control-group">
              <label>Location</label>
              <div class="controls">
                <select class="form-control" name="location" required="true">
		  <option value="">Choose Location</option>
		  <!--include the location array here's-->
		  @foreach($locations as $location)
		   <option value="
			   {{$location->new_house_address." ".$location->street_name}}">
		     {{$location->new_house_address." ".$location->street_name}}</option>
		   @endforeach
		  
		</select>
              </div>
            </div>   
            <div class="control-group">
              <label>Job Description</label>
              <div class="controls">
		<select class="form-control" name="job_desc"required="true">
		  <option value="">Job Description</option>
		   @foreach($reportCodes as $code)
		   <option value="
			   {{$code->code}}">
		     {{$code->code}}</option>
		   @endforeach
		</select>
              </div>
            </div> 
            <div class="control-group">
              <label>Planner</label>
              <div class="controls"> 
		<select class="form-control" name="planner" required="true">
		  <option>Planner</option>
		  @foreach($planners as $planner)
		   <option value="
			   {{$planner->name}}">
		     {{$planner->name}}</option>
		   @endforeach
		</select>
              </div>
            </div>   
	    <div class="control-group">
              <label>Technician</label>
              <div class="controls">
                <select class="form-control" name="technician" required="true">
		  <option>Technician</option>
		  @foreach($technicians as $technician)
		   <option value="
			   {{$technician->name}}">
		     {{$technician->name}}</option>
		   @endforeach
		</select>
              </div>
            </div>  
	    <div class="control-group">
              <label>Supervisor</label>
              <div class="controls">
                <select class="form-control" name="supervisor" required="true">
		  <option>Supervisor</option>
		  @foreach($supervisors as $supervisor)
		   <option value="
			   {{$supervisor->name}}">
		     {{$supervisor->name}}</option>
		   @endforeach
		</select>
              </div>
            </div> 
	    <div class="control-group">
              <label>Date Started</label>
              <div class="controls">
                <input type="date" name="date_started" class="form-control" placeholder="12/11/2015" required="true">
              </div>
            </div> 
	    <div class="control-group">
              <label>Time Started</label>
              <div class="controls">
                <input type="time" name="time_started" class="form-control" placeholder="12:30" required="true">
              </div>
            </div> 
	    
            <div class="control-group pull-right">
              <label></label>
              <div class="controls ">
                <button type="submit" class="btn btn-primary">
                  Add
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

