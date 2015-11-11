@extends('layouts.pmLayout')
@section('content')
  @parent
  <!--include the for here-->
  	   <div class="row">
            <!-- center left-->	
         	<div class="col-md-12">

		<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>New Preventive Maintenance Job</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical" method="POST" action="{{url('/pm/job/new/submit')}}">
	    <!--adding the csrf_field-->
	    {!!csrf_field()!!}
            <div class="control-group">
              <label>Job Id</label>
              <div class="controls">
                <input type="hidden"  name="job_id" class="form-control" value="{{$jobId}}" required="true">
		<input type="text"  disabled="true" name="job_id" class="form-control" value="{{$jobId}}" required="true">
		<br/>
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
			   {{$location->location}}">
		     {{$location->location}}</option>
		   @endforeach
		  
		</select>
		<br/>
		</div>
            </div>  
	    <div class="control-group">
              <label>Date Of Job Done</label>
              <div class="controls">
                <input type="date" name="date_done" class="form-control" placeholder="12/11/2015" required="true">
              </div>
	      <br/>
            </div> 
	    <div class="control-group">
              <label>House Serviced</label>
              <div class="controls">
                <input type="number" name="houses_serviced" class="form-control" placeholder="3" required="true">
              </div>
	      <br/>
            </div> 
	    <div class="control-group">
              <label>Date Of Next Service</label>
              <div class="controls">
                <input type="date" name="date_next" class="form-control" placeholder="Date" required="true">
              </div>
	      <br/>
            </div> 
	    <div class="control-group">
              <label>Engineers Remark</label>
              <div class="controls">
                <input type="text" name="engr_remark" class="form-control" placeholder="Good" required="true">
              </div>
	      <br/>
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
@endsection
