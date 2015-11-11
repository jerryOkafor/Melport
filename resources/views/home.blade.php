@extends('layouts.master')
@section('head')
  
  <link rel="icon" href="img/icon.ico" />
    <title>.::MELBONNY | {{$title}}.</title>
    @parent
@endsection

@section('content')
<!-- HEADER SECTION START-->
   <header id="header">
        <div class="container" >
                <div class="row"  >
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 logo-wrapper">
                         <img src="{{asset('img/mandilaslogo1.png')}}" alt="" />
                     </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" >
                          <div class="menu-links">
			    <a href="{{url('/')}}" title="Home"> <i class="ion-ios-home-outline"></i> </a>
			    <a href="{{url('/pm')}}" title="Preventive Maintenance" target="_blank"> <i class="ion-ios-analytics-outline"></i> </a>
			    <a href="{{url('/cm')}}" title="Corrective Maintenance" target="_blank"> <i class="ion-ios-book-outline"></i> </a>
			    <a href="{{url('/logistics')}}" title="Logistics & Planning" target="_blanks"> <i class="ion-ios-briefcase-outline"></i> </a>
			    <a href="{{url('/asstes')}}" title="Assets" target="_blank"> <i class="ion-ios-calculator-outline"></i> </a>
			    <a href="{{url('/admin')}}" title="Admin" target="_blank"> <i class="ion-ios-unlocked-outline"></i> </a>
                          

                          </div>                    
                </div>
                      
                </div>
              
                
            </div>
   </header>
    <!-- HEADER SECTION END-->
    <!--HOME SECTION START  -->
    <div id="home">
        <div class="overlay">
	  <div class="container">
<!--	   
	  <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Heads up!</strong>  ..::.
          </div> -->
	  
                <div class="" >
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <h1 >Mandilas Enterprises Ltd.</h1>
                    <h4>
		      Melport:Version 2.0.1 is redesigned for better performance,responsiveness and scalability. 
		      The backend security has been boosted using Laravel&trade; and the front end is optimised using
		      Twitter's Bootstrap and Google's AngularJs. 
                         

                    </h4>
			  
		<!--I will use Auth::check() to determine when to show this buttons-->	
		@if(!Auth::check())
		 <div class="alert alert-danger alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		  <strong>Heads Up!</strong>  ..:::
		  @if(session()->has('message'))
		  {{session('message')}}
		  @else		  
		  Please Login.
		  @endif
		  </div>   
		<a href="#loginModal" class="btn btn-custom btn-two" data-toggle="modal">Login</a><a href="#regModal" class="btn btn-custom btn-one" data-toggle="modal">Register</a>	  
		    @else
		  <div class="alert alert-success alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		  @if(session()->has('message'))
		  <strong>{{session('message')}} ..::</strong><span>Welcome:{{Auth::user()->name}}</span>
		  @else 
		  <strong>Welcome:</strong>  ..::: <span>{{Auth::user()->name}}</span>.
		  @endif
		  </div>   
		    <a href="{{url('auth/logout')}}" class="btn btn-custom btn-two" data-toggle="modal">Logout</a>
		    @endif
		
                </div>
                </div>	      
	         <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  client-cover" >
                     <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="testimonial-section">
                           Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed. 
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client1.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
                        <div class="item">
                           <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client2.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
                        <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client3.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
		      
		      <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client1.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
		      
		      <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client2.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
		      
		      <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client3.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
		      
		      <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client2.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div><div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client1.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
		      <div class="item">
                          <div class="testimonial-section">
                             Pellentesque posuere malesuada venenatis. 
                                Donec laoreet dapibus nulla,
                                 vitae feugiat metus aliquet sed.
                        </div>
                        <div class="testimonial-section-name">
                            <img src="{{asset('img/client3.jpg')}}" alt="" class="img-circle" />
                            -  Justine Goliyad
                        </div>
                            
                        </div>
                         <!--INDICATORS-->
                    <ol class="carousel-indicators carousel-indicators-set">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
			<li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
			<li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
			<li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>

                    </div>
                   
                </div>
                </div>
            </div>
              
                
            </div>
        </div>

    </div>
    <!--HOME SECTION END  -->
 	     
    <!-- FOOTER SECTION START-->
    <footer>
        <div class="container">
<div class="row text-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
    &copy; 2015 Mandilas Enterprise Ltd | by <a href="http://www.xavitech.com/" target="_blank">Xavitech Ltd.</a> 
    </div>
    </div>
            </div>
    </footer>
   <!--login modal-->
<div id="loginModal" class="modal fade" data-backdrop="static" data-keyboard="false"  tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Login</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="POST" action="{{url('auth/login')}}">
	   {!!csrf_field()!!}
            <div class="form-group">
              <input type="text" name="email" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="#regModal" data-toggle="modal" data-dismiss="modal">Register</a></span><span><a href="{{url('auth/password/reset')}}">Need help?</a></span>
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
  
  <!--register modal-->
  <div id="regModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="{{asset('img/logoIcon.png')}}" class="img-circle"><br>Registration!</h2>
      </div>
      <div class="modal-body">
	<form class="form col-md-12 center-block" method="POST" action="{{url('/register')}}">
	  {!!csrf_field()!!}
            <div class="form-group">
              <input type="text" name="name" class="form-control input-lg" placeholder="Full Name" required="true">
            </div>
	    <div class="form-group">
              <input type="text" name="email" class="form-control input-lg" placeholder="Email" required="true">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control input-lg" placeholder="Password" required="true">
            </div>
	    <div class="form-group">
              <input type="password" name="password-again" class="form-control input-lg" placeholder="Confirm Password" required="true">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Register</button>
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
      
  

    @endsection