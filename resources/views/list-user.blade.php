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
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">User List</div>
		<div class ="panel-body">
				<a href="/personnel/create" class="btn btn-info">Create New User</a><br><br>	
		   <div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Position</th>
				  <th>Divisi</th>
				  <th>Edit</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($personnels as $personnel)
				<tr>
				  <td>{{$personnel->fname}} {{$personnel->lname}}</td>
				  <td>{{$personnel->position}}</td>
				  <td>{{$personnel->divisi}}</td>
				  <td><span><a class="btn btn-info" href="/personnel/{{$personnel->id}}">view</a></span>
				  <span><a class="btn btn-default" href="/personnel/{{$personnel->id}}/edit">edit</a></span></td>
				</tr>
				@endforeach
				
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
		


@endsection
