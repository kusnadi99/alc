<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
	hr.style14 { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}

 </style>
 
 
	<div class="container">     
		<div class="card">
		<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="text-align:center;">
		<img class="card-img-top" style="margin-top:50px;" src="/Elegantic/images/ALS.jpg" alt="Card image cap" width="60%"></div>
        <div id="loginbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                   
           	<br>
				<hr class="style14">
			<br>
			<div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:green; color:white">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
								          {{ csrf_field() }}
								
                            <div style="margin-bottom: 25px" class="input-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
										 @if ($errors->has('username'))
											<span class="help-block">
												<strong>{{ $errors->first('username') }}</strong>
											</span>
										@endif
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
                                    </div>
								
								<div style="text-align: center">
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-primary" style="background-color:green; color:white">
										Login
									  </button>

                                    </div>
                                </div>
								</div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                             <a class="btn btn-link" href="/request-reset" style="color:green">
												Forgot Your Password?
											</a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     

					</div>

                        </div>                     
                    </div>  
        </div>
    </div>
