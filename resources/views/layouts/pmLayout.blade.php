@extends('layouts.master')
@section('head')
  @parent
  <title>Melport | PM</title>
      <link href="{{asset('css/pm_styles.css')}}" rel="stylesheet">
      <!--Favicon Icon--> 
      <link rel="icon" href="{{asset('img/icon.ico')}}" />

@endsection
@section('content')
<nav class="navbar navbar-fixed-top header">
 	<div class="col-md-12">
        <div class="navbar-header">
          
          <a href="{{url('/pm')}}" class="navbar-brand">Preventive Maintenance</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
          <i class="glyphicon glyphicon-search"></i>
          </button>
      
        </div>
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse1">
          <form class="navbar-form pull-left">
              <div class="input-group pull-right" style="min-width:70%;">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
          </form>

        </div>	
     </div>	
</nav>
<div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
        <div class="navbar-header">
          
          <a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="dropdown">
	    <i class="glyphicon glyphicon-home" style="color:#dd1111;"></i> Options <small><i class="glyphicon glyphicon-chevron-down"></i></small></a>
          <ul class="nav dropdown-menu">
              <li><a href="{{url('/')}}"><i class="glyphicon glyphicon-home" style="color:#1111dd;"></i> Home</a></li>
              <li><a href="{{url('auth/logout')}}"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Logout</a></li>
	      <li class="nav-divider"></li>
              <li><a href="{{url('/pm/job/new')}}"><i class="glyphicon glyphicon-plus-sign" style="color:#11dd11;"></i> New Job</a></li>
	      <li><a href="#updateJobModal" data-toggle="modal"><i class="glyphicon glyphicon-upload" style="color:#11dd11;"></i> Update Job</a></li>
	      <li><a href="{{url('/pm/ppm/report')}}"><i class="glyphicon glyphicon-download-alt" style="color:#11dd11;"></i> PPM Report</a></li>
	      <li><a href="{{url('/pm/report/export')}}"><i class="glyphicon glyphicon-download" style="color:#11dd11;"></i> Export</a></li>
              <li class="nav-divider"></li>
              <li><a href="#addLocationModal" data-toggle="modal"><i class="glyphicon glyphicon-plus-sign" style="color:#11dd11;"></i> New Location</a></li>
	      
	      <li class="nav-divider"></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog" style="color:#dd1111;"></i> Settings</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-plus"></i> More..</a></li>
          </ul>
          
          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
      
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse2">
          <ul class="nav navbar-nav navbar-right">
             <!--<li><a href="#loginModal" role="button" data-toggle="modal">Login</a></li>-->
             <li><a href="#aboutModal" role="button" data-toggle="modal">About</a></li>
           </ul>
        </div>	
     </div>	
</div>
<!-- upper section -->
<div class="container" id="main">  

  
  @endsection
@section('end')
    
    <br>
    
    <div class="clearfix"></div>
      
    <hr>
    <div class="col-md-12 text-center"><p>Melport Version 2.0.1. Designed By <br><a href="http://www.xavitech.com" target="_ext">Xavitech Ltd.</a></p>
    </div>
    <hr>
  </div><!--/main-->


<!--about modal-->
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">About Us</h2>
      </div>
      <div class="modal-body">
          <div class="col-md-12 text-center">
            <a href="#">This Software product was designed by ...</a><br><i class="glyphicon glyphicon-heart"></i><a href="http://bootply.com/templates">Xavitech Ltd.</a>
            <br><br>
            <!--<a href="https://github.com/iatek/bootstrap-google-plus">GitHub Fork</a>-->
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">OK</button>
      </div>
  </div>
  </div>
</div>

<!--update Job modal-->
  <div id="updateJobModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Update Job!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/pm/job/update')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="text" name="job_id" required="true" class="form-control input-lg" placeholder="Enter Job Id">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Load</button>
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
<!--add Location modal-->
  <div id="addLocationModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Add A new Location!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="post" action="{{url('/pm/location/add/submit')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="text" name="location" required="true" class="form-control input-lg" placeholder="Enter Job Id">
            </div>
	  <div class="form-group">
	    <input type="number" name="number_of_house" required="true" class="form-control input-lg" placeholder="Enter Job Id">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Add Location</button>
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
  @parent	
  <!--ADDIN THE CUSTUM JS-->
  <script src="{{asset('js/pm.js')}}" type="text/javascript"></script>
@endsection