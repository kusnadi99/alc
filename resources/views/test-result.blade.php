@include('layouts.head')

<body class="page-header-fixed page-full-width">

            @include('layouts.header')
	<div class="page-container" id="wrapper">
       <div class="page-content-wrapper"> 
	   	@if(empty($next_section))
        <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">		
			<div class="container">
				<div class="row">
				
					<div class="btn-group btn-breadcrumb">
						<a class="btn btn-default">Training</i></a>
						<a class="btn btn-danger">Test Result</a>
					</div>
				</div>
	   
			</div>
			<br>
			
			<div class="block-advice">
					<div class = "text-center">
					<h2 class="brand-before">
							<small>{{$training->title}}</small>
						</h2>
						<h1 class="brand-name">Hasil Test</h1>
							
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Pre-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_pre_test or 'null'}}
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Post-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_post_test or 'null'}}
									</div>
								</div>
							</div>
						</div>
						
						<br>
						<h6>
						
							<a class="btn darkgreen" href="/">Next</a>
						
						</h6>
						
					</div>
				</div>
		</div>

	@else
		
        <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">	
			<div class="container">
				<div class="row">
				
					<div class="btn-group btn-breadcrumb">
						<a class="btn btn-default">Training</i></a>
						<a class="btn btn-danger">Test Result</a>
					</div>
				</div>
	   
			</div>
			<br>
			
			<div class="block-advice">
					<div class = "text-center">
					<h2 class="brand-before">
							<small>{{$training->title}}</small>
						</h2>
						<h1 class="brand-name">Hasil Test</h1>
							
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Pre-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_pre_test or 'null'}}
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
									    <h3 class="panel-title"><strong>Post-Test Score</strong></h3>
									</div>
									<div class="panel-body" style="font-size: 100px;">
									    {{$skor_post_test or 'null'}}
									</div>
								</div>
							</div>
						</div>
						
						<br>
						<h6>
						
							<a class="btn darkgreen" href="/section-training/{{$next_section->id}}">Next</a>
						
						</h6>
						
					</div>
				</div>
		</div>		
		
	@endif
				

	</div>
	
	<!-- Modul -->
	@include('layouts.footer')
	</div>

	@include('layouts.script')
</body>
</html>
