@extends('layouts.master')
@section('head')
  @parent
  <title>Change Password</title>
      <!--Favicon Icon--> 
      <link rel="icon" href="{{asset('img/icon.ico')}}" />

@endsection
@section('content')
<!--register modal-->
  <div id="passwordResetModal" class="modal fade" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a href="{{url('/cm')}}" title="Go back">×</a></button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Password Reset</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="POST" action="{{url('auth/password/reset/submit')}}">
            <div class="form-group">
              <input type="text" name="email" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="old-password" class="form-control input-lg" placeholder="Old Password">
            </div>
	    <div class="form-group">
              <input type="password" name="new-password" class="form-control input-lg" placeholder="New Password">
            </div>
	  <div class="form-group">
              <input type="password" name="new-password-again" class="form-control input-lg" placeholder="New Password Again">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Reset</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn glyphicon glyphicon-backward" data-dismiss="modal" aria-hidden="true"><a href="{{url('/cm')}}" title="Go back"> Cancel</a></button>
		  </div>	
      </div>
  </div>    
  </div>
</div> 
  @endsection


















