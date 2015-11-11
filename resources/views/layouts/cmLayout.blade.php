@extends('layouts.master')
@section('head')
  @parent
  <title>Corrective Maintenance</title>
      <link href="{{asset('css/cm_styles.css')}}" rel="stylesheet">
      <!--Favicon Icon--> 
      <link rel="icon" href="{{asset('img/icon.ico')}}" />

@endsection
@section('content')
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-toggle glyphicon glyphicon-option-vertical" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </a>
      <a class="navbar-brand" href="{{url('/cm')}}">Corrective Maintenance!</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-option-vertical"></i></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="{{url('/')}}" class="glyphicon glyphicon-home"> Home</a></li>
	    
<!--//	    Remenber to use Auth::chack() here-->
            <li><a href="{{url('auth/logout')}}"><i class="glyphicon glyphicon-lock"></i>&nbsp;&nbsp;Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->
<!-- upper section -->
  <div class="container">  

  
  @endsection
@section('end')
  	
</div><!--/container-->
</div><!-- /Main -->

<!--update Job modal-->
  <div id="updateModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Update Job!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/job/update')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="number" name="job_id" required="true" class="form-control input-lg" placeholder="Enter Job Id">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Load</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div> 

<!--weekly report modal-->
  <div id="weeklyReportModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Weekly Report!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/report/weekly/submit')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="week" name="job_id" required="true" class="form-control input-lg" placeholder="Choose Week">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Load</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--monthly report view-->
  <div id="monthlyReportModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Monthly Report!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/report/monthly/submit')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="date" name="job_id" required="true" class="form-control input-lg" placeholder="Choose Month">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Load</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>
<!--location report modal-->
  <div id="locationReportModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Report!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/report/monthly/submit')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
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
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Load</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--add location modal-->
  <div id="addLocationModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>New Location!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/location/add/submit')}}">
	  {!!csrf_field()!!}
             <div class="form-group">
              <input type="text" name="new_house_address" required="true" class="form-control input-lg" placeholder="New House Address">
            </div> 
	  <div class="form-group">
              <input type="text" name="street_name" required="true" class="form-control input-lg" placeholder="Street Name">
            </div>
	  <div class="form-group">
              <input type="text" name="occupants_name" required="true" class="form-control input-lg" placeholder="Occupants Name">
            </div> 
	  <div class="form-group">
              <input type="text" name="occupants_number" required="true" class="form-control input-lg" placeholder="Occupants Phone Number">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--add report code modal-->
  <div id="addReportCodeModal" class="modal slide" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>New Report Code!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/code/report/add/submit')}}">
	  {!!csrf_field()!!}
             <div class="form-group">
              <input type="text" name="code" required="true" class="form-control input-lg" placeholder="Enter the Code here">
            </div> 
	  
	  <div class="form-group">
              <input type="text" name="meaning" required="true" class="form-control input-lg" placeholder="Enter the code Meaning">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--add fault code modal-->
  <div id="addFaultCodeModal" class="modal slide" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>New fault Code!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/code/falut/add/submit')}}">
	  {!!csrf_field()!!}
             <div class="form-group">
              <input type="text" name="code" required="true" class="form-control input-lg" placeholder="Enter the Code here">
            </div> 
	  
	  <div class="form-group">
              <input type="text" name="meaning" required="true" class="form-control input-lg" placeholder="Enter the code Meaning">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--add repair code modal-->
  <div id="addRepairCodeModal" class="modal slide" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>New Repair Code!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/code/repair/add/submit')}}">
	  {!!csrf_field()!!}
             <div class="form-group">
              <input type="text" name="code" required="true" class="form-control input-lg" placeholder="Enter the Code here">
            </div> 
	 
	  <div class="form-group">
              <input type="text" name="meaning" required="true" class="form-control input-lg" placeholder="Enter the code Meaning">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>

<!--add root cause code modal-->
<div id="addRootCauseCodeModal" class="modal slide" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>New Root Cause Code!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/cm/code/rootCause/add/submit')}}">
	  {!!csrf_field()!!}
             <div class="form-group">
              <input type="text" name="code" required="true" class="form-control input-lg" placeholder="Enter the Code here">
            </div> 
	 
	  <div class="form-group">
              <input type="text" name="meaning" required="true" class="form-control input-lg" placeholder="Enter the code Meaning">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>    
  </div>
</div>
<footer class="text-center">
 &copy; 2015 Mandilas Enterprise Ltd Bonny Island | by <a href="http://www.xavitech.com/" target="_blank"><strong>Xavitech Ltd.</strong></a> 
</footer>

<!--i ma commenting the modal class out so that i can use it when i want to-->
<!--
<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div> /.modal-content 
  </div> /.modal-dalog 
</div> /.modal -->


@parent
  <!--ADDIN THE CUSTUM JS-->
  <script src="{{asset('js/cm_js.js')}}" type="text/javascript"></script>
@endsection