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
<div class = "PageContainer">
    <div class="quick-press">
		<h3>Employee Raport</h3>
		<div class = "main-table">
			<table id= "detailTable" class="table table-striped">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>User Department</th>
				  <th>Training</th>
				  <th>Training for Department</th>
				  <th>Auth</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
			  	@foreach($user_auth as $auth)
				<tr>
				  <td>{{$auth['personnel']->fname}} {{$auth['personnel']->lname}}</td>
				  <td>{{$auth['personnel-departmen']->nama_departmen}}</td>
				  <td>{{$auth['training']->title}}</td>
				  <td>{{$auth['training-department']->nama_departmen}}</td>
				  @if($auth->auth == 1 )
				  <td>Aktif</td>
				  <td><a href="/access/{{$auth->id}}/nonactive" class="btn btn-default">Nonaktifkan</a></td>
				  @else
				  <td>Nonaktif</td>
				  <td><a href="/access/{{$auth->id}}/active" class="btn btn-default">Aktifkan</a></td>
				  @endif
				</tr>
				@endforeach
				
			  </tbody>
			  </tbody>
			</table>
		</div>
	</div>
</div>
		


@endsection
