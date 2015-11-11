@extends('layouts.cmLayout')
@section('content')
  @parent
    
  <!-- upper section -->
  <div class="row">
    @if(session()->has('message'))
          <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Heads up!</strong>  ..::  {{session('message')}}.
          </div>
	  @endif
  @include('shared.cm_side_bar')
    <div class="col-sm-9" id="col_center_right">
      	      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>  
            
       <hr>
      
	   <div class="row">
            <!-- center left-->	
         	<div class="col-md-7">
		  <div class="well">Total Jobs Added This Month<span class="badge pull-right">23</span></div>
		<div class="well">Total Jobs Till Date<span class="badge pull-right">3456</span></div>
                <hr>
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Projection Status</h4></div>
                  <div class="panel-body">
                    
                    <small>Complete</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span >72%</span>
                      </div>
                    </div>
                    <small>In Progress</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span >20%</span>
                      </div>
                    </div>
                    <small>At Risk</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span >80%</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->                     
              
          	</div><!--/col-->
         
            <!--center-right-->
        	<div class="col-md-5">
              
                <ul class="nav nav-justified">
		  <li><a href="#addReportCodeModal" data-toggle="modal" id="report_code_link" title="Add Root Cause Code Here" data-toggle="modal" >
		    <i class="glyphicon glyphicon-plus-sign"></i><br/>Report Code</a>
		</li>
                <li><a href="#addRepairCodeModal" data-toggle="modal" id="repair_code_link" title="Add Reapair Code Here" data-toggle="modal" >
		    <i class="glyphicon glyphicon-plus-sign"></i><br/>Repair Code</a>
		  </li>         	
		  <li><a href="#addFaultCodeModal" data-toggle="modal" id="fault_code_link" title="Add Fault Code" data-toggle="modal" >
		    <i class="glyphicon glyphicon-plus-sign"></i><br/>Fault Code</a>
		</li>
		<li><a title="Add Root-cause Code Here" data-toggle="modal" href="#addRootCauseCodeModal" data-toggle="modal" id="root_cause_code_link">
		    <i class="glyphicon glyphicon-plus-sign"></i><br/>R-C Code</a>		    
		</li>
       		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
		    <i class="glyphicon glyphicon-cog"></i><span class="count">3</span><br/>Settings</a>
		    <ul class="dropdown-menu" role="menu">
			<li><a href="#">Is there a way..</a></li>
			<li><a href="#">Hello, admin. I would..</a></li>
			<li><a href="#"><strong>All messages</strong></a></li>
		    </ul>
		</li>	
		</ul>              
                <hr>
		<p>
                 To add codes {Report Code, Repair Code, Fault Code, Root-Cause Code} simply click on the button corresponding 
		 to the code you want add. As the dialog appears, en then add the code an d it's meaning and submit.
                 </p>
                
              
                <hr>
              
                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-plus"></i><br>
                    Service
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-cloud"></i><br>
                    Cloud
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-cog"></i><br>
                    Tools
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-question-sign"></i><br>
                    Help
                  </a>
                </div>
              
			</div><!--/col-span-6-->
     
       </div><!--/row-->
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  <div class=" container-fluid row container" id="content_lower_secction">    
    <div class="col-md-12">
      <a href="{{url('/cm/reports')}}" title="Refresh Report"><strong><i class="glyphicon glyphicon-list-alt"></i> Reports</strong></a>  
      <!--<a href="{{url('/cm')}}" title="Go Back"><strong><i class="glyphicon glyphicon-backward pull-right"></i></strong></a>-->  
      <hr>    
    </div>    
@include('shared.cm_table')
  </div><!--/row-->
  @endsection