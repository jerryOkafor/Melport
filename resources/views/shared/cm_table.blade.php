 <div class="col-md-12">
      @if($reports->count())
      <table class="table table-striped">
        <thead>
          <tr>
	    <th>S/n</th>
	    <th>Job ID</th>
	    <th>Location</th>
	    <th>Date Started</th>
	    <th>Time Started</th>
	    <th>Description</th>
	    <th>Planner</th>
	    <th>Technician</th>
	    <th>Supervisor</th>
	    <th>Fault Code</th> 
	    <th>Repair Code</th>
	    <th>R. C. Code</th>
	    <th>Date Ended</th>
	    <th>Time Ended</th>
	    <th>Remark</th>
	    <th></th>
	  </tr>
        </thead>
        <tbody>
	<p class=" hidden">  {{$i=1}}</p>
	  @foreach($reports as $report)
	    <tr>
	    <td>{{$i}}</td>
	    <td>{{$report->jobId}}</td>
	    <td>{{$report->location}}</td>
	    <td>{{$report->dateStarted}}</td>
	    <td>{{$report->timeStarted}}</td>
	    <td>{{$report->jobDescription}}</td>
	    <td>{{$report->planner}}</td>
	    <td>{{$report->technician}}</td>
	    <td>{{$report->supervisor}}</td>
	    <td>{{$report->faultCode}}</td>
	    <td>{{$report->repairCode}}</td>
	    <td>{{$report->rootCauseCode}}</td>
	    <td>{{$report->dateEnded}}</td>
	    <td>{{$report->timeEnded}}</td>
	    <td>{{$report->engrRemark}}</td>
	    <td>
	      <div class="dropdown">
		<a href="#" class="dropdown-toggle" data-keyboard="true" data-toggle="dropdown">
		<i class="glyphicon glyphicon-option-vertical"></i></a>
                <ul class="dropdown-menu pull-right dropdown-menu-shift-up" data-target="dropdown-menu-left">
                  <li><a href="{{url('/cm/report/edit/update/'.$report->id.'')}}"><span class="glyphicon glyphicon-edit"></span><span class="pull-right">Update</span></a></li>
                  <li><a href="{{url('/cm/report/edit/delete/'.$report->id.'')}} " class="delete-link"><span class="glyphicon glyphicon-trash"></span><span class="pull-right">Delete</span></a></li>
                  <li><a href="{{url('/cm/report/edit/tag/'.$report->id.'')}}"><span class="glyphicon glyphicon-tag"></span><span class="pull-right">Tag Important</span></a></li>
                </ul>

	      </div>
	    </td>
	    
	  </tr>
	  <p class=" hidden">  {{$i++}}</p>
	  @endforeach
	  
         
        </tbody>
      </table>      
      <hr>  
      @else
      
             <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Heads up!</strong> There is not report record in the database. Please ensure that
	      your report database is not empty or you can inform the admin.
          </div>
      @endif
      
    </div>