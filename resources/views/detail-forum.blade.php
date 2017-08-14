@include('layouts.head')
<script type="text/javascript" src="{{URL::asset('js/textarea.js')}}"></script>
<style>
p.big {
    line-height: 300%;
	font-size : 15px;
}
</style>
<body>
    <!-- Header -->
    <div id="wrapper">
        <div class="wrapper-holder">
            @include('layouts.header')
                 
            <section id="main">
				<div class ="col-lg-8 col-md-8 col-sm-8">
					<div class="row">
						<h3>{{ $forum['title'] }}</h3>
						<h6>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}, {{ \Carbon\Carbon::parse($forum->create_at)->format('l jS \\of F Y')}}</h6> 
						<hr class="style14"> 
						<p align="justify" class="big">
							{!! html_entity_decode($forum['content']) !!}

						</p><br>
						<hr class="style14"> 
						<div class='pull-right'>
							Attachments : <br>
							@foreach($forum['file_pendukung'] as $file)
								<a href="{{URL::asset($file->url)}}"><i class="fa fa-paperclip" aria-hidden="true"></i>{{$file->name}} </a><br>
							@endforeach
						</div>
					</div>
								
					@if($forum->can_reply == 1)
						<div class="block-advice">
							<h3>Comments({{count($forum['replie'])}})</h3>
							<br>
							@foreach($forum['replie'] as $reply)
								<div class="panel panel-default">
									<div class="panel-heading"><strong>{{ $reply['title'] }}</strong><br>
										{{$reply['personnel']->fname}} {{$reply['personnel']->lname}}, {{ \Carbon\Carbon::parse($reply->create_at)->format('l jS \\of F Y')}}</div>
									<div class="panel-body">
											{!! html_entity_decode($reply['content']) !!}
									</div>
									<div class='pull-right'>
										Attachments : <br>
										@foreach($reply['file_pendukung'] as $file)
											<a href="{{URL::asset($file->url)}}"><i class="fa fa-paperclip" aria-hidden="true"></i>{{$file->name}} </a><br>
										@endforeach
									</div>
								</div>
								<br>
							@endforeach

							@if(Auth::user() == null)
							@else
						</div>

						<div class="block-advice">
							<form id="myform" class="form-horizontal" role="form" method="POST" action="{{ URL::action('ReplieController@store') }}" enctype="multipart/form-data">
	                        	{{ csrf_field() }}
	                        	<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
	                        	<input type="hidden" name="id_forum" value="{{$forum->id}}">
	                        	<div class="form-group">
				                    <label for="title" class="col-md-2 control-label">Title</label>

				                    <div class="col-md-8">
				                        <input id="title" type="text" class="form-control" name="title" required  value="[RE:] {{$forum['title']}}">
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label for="content" class="col-md-2 control-label">Content</label>

				                    <div class="col-md-8">
				                        <textarea id="summernote" type="text" class="form-control" name="content" required  style="resize: none;"></textarea>
				                    </div>
				                </div>
				                <div class="form-group">
			                        <label for="image" class="col-md-2 control-label">Upload attachment</label>

			                        <div class="col-md-8">
			                             <div class="input-group">
			                                <span class="input-group-btn">
			                                    <span class="btn btn-default btn-file">
			                                        Browse..
													<input type="file"
														   id="file"
														   onchange="javascript:updateList()"
														   name="file_pendukung[]"
														   multiple/>
			                                    </span>
			                                </span>
											 <input type="text" class="form-control" value="select file(s)" readonly>
			                            </div></br>
											<div class='file-uploaded'>
												<p>
													<div id="fileList"></div>
												</p>
											</div>
			                        </div>
			                    </div>
				                <div class="form-group">
				                    <div class="col-md-8 col-md-offset-2">
				                        <button type="submit" class="btn btn-info">
				                            Comment
				                        </button>
				                    </div>
				                </div>
							</form>
						</div>	
						@endif
					@endif
					
				</div>
				
				<div class="col-lg-4  col-md-4 col-sm-12">
					<div class="well">
						<h4>Recent Forum</h4>
						<hr class="style14">
						@foreach($recent as $rct)
							<a href="/forum/{{$rct->id}}"><p>{{$rct->title}}</p></a>
						@endforeach
						<br>
					</div>
				</div>
            </section>
        </div>
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
	<script>
        updateList = function() {
            var input = document.getElementById('file');
            var output = document.getElementById('fileList');

            output.innerHTML = 'Selected file(s) <br><ul>';
            for (var i = 0; i < input.files.length; ++i) {
                output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

            }
            output.innerHTML += '</ul>';
        }
	</script>
</body>
</html>