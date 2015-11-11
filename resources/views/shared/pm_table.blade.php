  <div class="col-md-12">
      @if($reports->count())
      <table class="table table-responsive table-condensed table-striped">
        <thead>
          <tr>
	    <th>S/n</th>
	    <th>Job ID</th>
	    <th>Location</th>
	    <th>Houses</th>
	    <th>Frequency</th>
	    <th>Rate</th>
	    <th>Expected Rate</th>
	    <th>Actual Rate</th>
	    <th>Current Status</th>
	    <th>Last Inspection</th>
	    <th>Next Inspection</th> 
	    <th>Calls Generated</th> 
	    <th>Calls Completed</th>
	    <th>Inspections</th>
	    <th>No Access</th>
	    <th>No Access Resolved</th>
	    <th>Remark</th>
	    <th></th>
	  </tr>
        </thead>
        <tbody>
	<p class="hidden">{{$i=1}}</p>
	  @foreach($reports as $report)
          <tr>
	    <td>{{$i}}</td>
	    <td>{{$report->jobId}}</td>
	    <td>{{$report->location}}</td>
	    <td>{{\App\Libraries\MelportCore::getNumberOfHouses($report->location)}}</td>
	    <td>Freq</td>
	    <td>Rate</td>
	    <td>Expected Rate</td>
	    <td>Actual Rate</td>
	    <td>Current Status</td>
	    <td>{{$report->dateDone}}</td>
	    <td>Next Date</td>
	    <td>{{$report->callsGenerated}}</td>
	    <td>{{$report->callsCompleted}}</td>
	    <td>{{$report->inspection}}</td>
	    <td>{{$report->noAccess}}</td>
	    <td>{{$report->noAccessResolved}}</td>
	    <td>{{$report->engrRemark}}</td>
	     <td>
	      <div class="dropdown">
		<a href="#" class="dropdown-toggle" data-keyboard="true" data-toggle="dropdown">
		<i class="glyphicon glyphicon-option-vertical"></i></a>
                <ul class="dropdown-menu pull-right dropdown-menu-shift-up" data-target="dropdown-menu-left">
                  <li><a href="{{url('/pm/report/edit/update/'.$report->id)}}"><span class="glyphicon glyphicon-edit"></span><span class="pull-right">Update</span></a></li>
                  <li><a href="{{url('/pm/report/edit/delete/'.$report->id)}}" class="delete-link"><span class="glyphicon glyphicon-trash "></span><span class="pull-right">Delete</span></a></li>
                  <li><a href="{{url('/pm/report/edit/tag/'.$report->id)}}"><span class="glyphicon glyphicon-tag"></span><span class="pull-right">Tag</span></a></li>
                </ul>

	      </div>
	    </td>
	    
	  </tr>
	  <p class="hidden">{{$i++}}</p>
	  @endforeach
	  
         
        </tbody>
      </table> 
      @else 
      <div class="well">You do not have any report in the PPM Report Database, Please contact the Admin.</div>
      @endif
      <hr>         
    </div>