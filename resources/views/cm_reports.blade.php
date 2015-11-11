@extends('layouts.cmLayout')
@section('content')
  @parent
<!--i shall leave only the table--> 
 <!-- lower section -->
  <div class=" container-fluid row pull-left" id="content_lower_secction">    
    <div class="col-md-12">
      <a href="{{url('/cm/reports')}}" title="Refresh Report"><strong><i class="glyphicon glyphicon-list-alt"></i> Reports</strong></a>  
      <a href="{{url('/cm')}}" title="Go Back"><strong><i class="glyphicon glyphicon-backward pull-right"></i></strong></a>  
      <hr>    
    </div>    
@include('shared.cm_table')
  </div><!--/row-->

<!--put a back button here-->

  @endsection