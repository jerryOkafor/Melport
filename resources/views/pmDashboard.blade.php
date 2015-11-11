@extends('layouts.pmLayout')
@section('content')
  @parent  
    	<div class="row">
	  <div class="col-md-12"><h2 class="glyphicon glyphicon-dashboard"> Dashboard</h2></div>
        <div class="col-md-12">
	  @if(session()->has('message'))
          <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Heads up!</strong>  ..::{{session('message')}}.
          </div>
	  @endif
        </div>
    	<div class="col-md-6 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Status Box</h4></div>
   			<div class="panel-body">
              <div class="row">
                <div class="col-xs-4"><a class="btn btn-info center-block" href="#">Total Till Date: </a></div>
                <div class="col-xs-4"><a class="btn btn-primary center-block" href="#">Total Month End: </a></div>
                <div class="col-xs-4"><a class="btn btn-danger center-block" href="#">Frequency: </a></div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-4"><a class="btn btn-warning center-block" href="#">Tagged Jobs:</a></div>
                <div class="col-xs-4"><a class="btn btn-info center-block" href="#">No Access: </a></div>
                <div class="col-xs-4"><a class="btn btn-success center-block" href="#">No Access Resolved: </a></div>
              </div>
              <hr>
	      <br/>
<!--              <div class="btn-group btn-group-sm"><button class="btn btn-default">1</button><button class="btn btn-default">2</button><button class="btn btn-default">3</button></div>              
              <hr>-->
		
              <div class="row">
              <div class="col-md-4">
                <span class="label label-default">Total Jobs this Month: 200</span>
                
              </div>
              <div class="col-md-4"> 
                <span class="label label-info">No Access: 20</span>
              </div>
              <div class="col-md-4">
                <span class="label label-primary">No Access Resolved: 10</span>
                </div>
              </div>
              
            </div>
         </div> 
    </div>
     <div class="col-md-6 col-sm-6">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> 
	     <h4>PM Progress</h4></div>
   		<div class="panel-body">              
              <div class="progress">
                <div class="progress-bar progress-bar-info" style="width: 100%">Expected Rate:100%</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 40%">Actual Rate: 10%</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" style="width: 100%">Expected Status: 100%</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 50%">Current Status: 50%</div>
              </div>
              
            </div>
         </div> 
    </div>
<!--     <div class="col-md-6 col-sm-6 container-fluid">
    	<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Tabs</h4></div>
   			<div class="panel-body">

                <ul class="nav nav-tabs">
                  <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
                  <li><a href="#B" data-toggle="tab">Section 2</a></li>
                  <li><a href="#C" data-toggle="tab">Section 3</a></li>
                </ul>
                <div class="tabbable">
                  <div class="tab-content">
                    <div class="tab-pane active" id="A">
                      <div class="well well-sm">I'm in Section A.</div>
                    </div>
                    <div class="tab-pane" id="B">
                      <div class="well well-sm">Howdy, I'm in Section B.</div>
                    </div>
                    <div class="tab-pane" id="C">
                      <div class="well well-sm">I've decided that I like wells.</div>
                    </div>
                  </div>
                </div>  /tabbable 
                          
              
            </div>
         </div> 
    </div>playground-->
 </div>
  <!-- lower section -->
  <div class=" container-fluid row" id="content_lower_secction">
    
    <div class="col-md-12 container-fluid">
      <a href="{{url('/pm/ppm/report')}}" title="Refresh Report"><strong><i class="glyphicon glyphicon-list-alt"></i> Reports</strong></a>  
      <!--<a href="{{url('/')}}" title="Go Back"><strong><i class="glyphicon glyphicon-backward pull-right"></i></strong></a>-->  
      <hr>    
    </div>
   
    
  @include('shared.pm_table')
  </div><!--/row-->
  @endsection