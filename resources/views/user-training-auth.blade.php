@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript">
    $(document).ready(function() {
        $('#detailTable').DataTable();
    });
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="{{ URL::asset('css/Upload.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/UpoladImg.js')}}"></script>


<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<div class="col-md-12 ">
	<div class="panel panel-success">
	    <div class="panel-heading">
	    	<h4>Training Request List</h4>
	    </div>
	    <div class="panel-body">
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>User Department</th>
				  <th>Training</th>
				  <th>Training for Department</th>
				  <th>Request Date</th>
				  <th>Auth</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($user_auth as $auth)
				<tr>
				  <td>{{$auth['personnel']->fname}} {{$auth['personnel']->lname}}</td>
				  <td>{{$auth['personnel-department']->nama_departmen}}</td>
				  <td>{{$auth['training']->title}}</td>
				  <td>{{$auth['training-department']->nama_departmen or 'All Department'}}</td>
				  <td>{{ \Carbon\Carbon::parse($auth->created_at)->format('l jS \\of F Y')}}</td>
				  @if($auth->auth == 1 )
				  <td>Open</td>
				  <td><a href="/access/{{$auth->id}}/nonactive" class="btn btn-warning">close</a></td>
				  @else
				  <td>Close</td>
				  <td><a href="/access/{{$auth->id}}/active" class="btn btn-default">open</a></td>
				  @endif
				</tr>
				@endforeach
				
			  </tbody>
			</table>
		</div>
		</div>
	</div>

	<div class="panel panel-success">
	    <div class="panel-heading">
	    	<h4>Request Password Reset List</h4>
	    </div>
	    <div class="panel-body">
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Username</th>
				  <th>Email</th>
				  <th>Create_at</th>
				  <th>Valid Account</th>
				  <th>Process</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($password_auth as $password)
				<tr>
				  <td>{{$password->username}}</td>
				  <td>{{$password->email}}</td>
				  <td>{{$password->created_at}}</td>
				  @if($password['valid'] == 1)
				  <td>valid account</td>
					  @if($password->is_process == 1)
					  <td>success</td>
					  <td><a class="btn btn-default btn-flat" disabled="true">process</a></td>
					  @else
					  <td style="opacity: 0.5">no action</td>
					  <td><a href="/access-process/{{$password['user']->id}}" class="btn btn-default btn-flat">process</a></td>
					  @endif
				  
				  @else
				  <td>non valid accout</td>
				  	  @if($password->is_process == 1)
					  <td>success</td>
					  @else
					  <td style="opacity: 0.5">no action</td>
					  @endif
				  <td><a class="btn btn-default btn-flat" disabled="true">process</a></td>
				  @endif
				</tr>
				@endforeach
				
			  </tbody>
			</table>
		</div>
		</div>
	</div>
</div>
		
@endsection
