@include('layouts.head')

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
          height: 200,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          
        });
        
    });
</script>

<body class="page-header-fixed page-full-width">
            @extends('layouts.header')
	@section('navbar')
					<li><a href="/">Home</a></li>
					<li class="classic-menu-dropdown"><a href="/news-board">News</a></li>
					@if(Auth::user())
					<li class="classic-menu-dropdown active"><a href="{{url('/forum')}}">Forum</a><span class="selected">
							</span></li>
					<li class="classic-menu-dropdown">
						<a data-toggle="dropdown" data-hover="dropdown" data-close-others="true" href="#">
							My Modules <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							@foreach ($module as $modul)
								<li>
									<a href="/module/{{$modul->id}}">{{$modul->nama}}</a>
								</li>
							@endforeach
						</ul>
					 
					</li>
						
					 
					<li class="classic-menu-dropdown"><a href="/raport/{{Auth::user()->id}}">My Profile</a></li>
					@endif
	@endsection

	<div class="page-container" id="wrapper">
       <div class="page-content-wrapper"> 
        <div class="page-content" style="background-color: rgb(243, 247, 248);opacity: 1;">
            <div class="block-advice">
                <div class = "text-center">
                    <div id="exTab1">
                        <ul  class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a  href="#umum" data-toggle="tab">Forum Umum</a>
                            </li>
                            <li>
                                <a href="#jobfamily" data-toggle="tab">Forum Job Family</a>
                            </li>
                            <li>
                                <a href="#dept" data-toggle="tab">Forum Department</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="umum">

                                <h1>Forum Umum</h1>
                                <p>forum ini ditujukan untuk seluruh karyawan PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_umum">New Thread</button><br><br>

                                <table  class="table table-striped detailTable text-left">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>Replies</th>
                                    <th>Last Post</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_umum as $forum)
                                        <tr>

                                            <td>
                                                <a href="/forum/{{$forum->id}}">{{$forum->title}}</a>
                                            </td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if(count($forum['replie']) == 0)
                                            <td>-</td>
                                            @else
                                            <td>{{$forum['last_reply_personnel']['fname']}} {{$forum['last_reply_personnel']['lname']}}, {{ \Carbon\Carbon::parse($forum['last_reply'][0]->created_at)->format('l jS \\of F Y')}}</td>
                                            @endif
                                            <td>{{ $forum->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>


                            </div>


                            <div class="tab-pane" id="jobfamily">
                                <h1>Forum {{$job_family->name}}</h1>
                                <p>forum ini ditujukan untuk karyawan {{$job_family->name}} PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_job_family">New Thread</button><br><br>

                                <table  class="table table-striped detailTable text-left">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>Replies</th>
                                    <th>Last Post</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_job_family as $forum)
                                        <tr>
                                            <td>
                                                <a href="/forum/{{$forum->id}}">{{$forum->title}}</a>
                                                @if($forum->id_user === Auth::user()->id)
                                                    <a
                                                            class="btn btn-warning btn-sm"
                                                            href="forum/{{$forum->id}}/user/edit"
                                                    >

                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if(count($forum['replie']) == 0)
                                            <td>-</td>
                                            @else
                                            <td>{{$forum['last_reply_personnel']['fname']}} {{$forum['last_reply_personnel']['lname']}}, {{ \Carbon\Carbon::parse($forum['last_reply'][0]->created_at)->format('l jS \\of F Y')}}</td>
                                            @endif
                                            <td>{{ $forum->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>

                            </div>



                            <div class="tab-pane" id="dept">
                                <h1>Forum {{$department->nama_departmen}}</h1>
                                <p>forum ini ditujukan untuk karyawan {{$department->nama_departmen}} PT Aerofood Indonesia</p>
                                <button  class="btn btn-info" data-toggle="modal" data-target="#modal_department">New Thread</button><br><br>

                                <table  class="table table-striped detailTable text-left">
                                <thead>
                                <tr>
                                    <th>Topic Discussion</th>
                                    <th>Started By</th>
                                    <th>Replies</th>
                                    <th>Last Post</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                    <tbody>

                                        @foreach($forum_department as $forum)
                                        <tr>
                                            <td><a href="/forum/{{$forum->id}}">{{$forum->title}}</a></td>
                                            <td>{{$forum['personnel']->fname}} {{$forum['personnel']->lname}}</td>
                                            <td>{{count($forum['replie'])}}</td>
                                            @if($forum['replie'] == null)
                                            <td>-</td>
                                            @else
                                            <td></td>
                                            @endif
                                            <td>{{ $forum->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</div>

@include('layouts.script')


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.detailTable').DataTable({
            "order": [[ 0, "desc" ]]
        });
    });
</script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

            {{-- modal edit forum --}}
            <div class="modal fade" id="modal_edit_forum" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content" >
                        <form
                                class="form-horizontal"
                                role="form" method="POST"
                                action="/forum/user/update"
                                enctype="multipart/form-data">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Your Thread</h4>
                            </div>

                            <div class="modal-body">
                                {{ csrf_field() }}

                                <input type="hidden" id="id_forum_edit" name="id_forum_edit">

                                <div class="form-group">
                                    <label for="title" class="col-md-3 control-label">Title</label>

                                    <div class="col-md-6">
                                        <input type="text" id="title_edit" name="title"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="can_reply" id="can_reply_edit" class="col-md-3 control-label">Can Reply</label>
                                    <div class="col-md-6">
                                        <select name="can_reply" >
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="col-md-3 control-label">Content</label>

                                    <div class="col-md-10 col-xs-offset-1">
                                        <textarea class="summernote" id="summernote_edit" name="content_edit"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-md-3 control-label">Upload attachment</label>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse..
                                        <input type="file"
                                               id="filetiga"
                                               onchange="javascript:updateList4()"
                                               name="file_pendukung[]"
                                               multiple/>
                                    </span>
                                </span>
                                            <input type="text" class="form-control" value="select file(s)" readonly>
                                        </div></br>
                                        <div class='file-uploaded'>
                                            <p id="attachments_edit">

                                            </p>
                                            <p>
                                            <div id="fileListtiga">

                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <!-- New Thread Umum -->
        <div class="modal fade" id="modal_umum" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">New Thread</h4>
                        </div>

                        <div class="modal-body">
                            {{ csrf_field() }}

                            <input type="hidden" name="id_department" value="">
                            <input type="hidden" name="id_job_family" value="">


                            <div class="form-group">
                                <label for="title" class="col-md-3 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="can_repl
                        y" class="col-md-3 control-label">Can Reply</label>
                                <div class="col-md-6">
                                    <select name="can_reply" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select><br>

                                </div>
                            </div>

                            <div class="form-group" >
                                <label for="content" class="col-md-3 control-label">Content</label>

                                <div class="col-md-10" name="content">
                                    <textarea class="summernote" name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-md-3 control-label">Upload attachment</label>

                                <div class="col-md-6">
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

                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- New Thread Department -->
        <div class="modal fade" id="modal_department" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">New Thread</h4>
                        </div>

                        <div class="modal-body">
                            {{ csrf_field() }}

                            <input type="hidden" name="id_department" value="{{$department->id_department}}">
                            <input type="hidden" name="id_job_family" value="">


                            <div class="form-group">
                                <label for="title" class="col-md-3 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" name="title"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="can_reply" class="col-md-3 control-label">Can Reply</label>
                                <div class="col-md-6">
                                    <select name="can_reply">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="content" class="col-md-3 control-label">Content</label>

                                <div class="col-md-10 col-xs-offset-1">
                                    <textarea class="summernote" name="content3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-3 control-label">Upload attachment</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse..
                                        <input type="file"
                                               id="filedua"
                                               onchange="javascript:updateList2()"
                                               name="file_pendukung[]"
                                               multiple/>
                                    </span>
                                </span>
                                        <input type="text" class="form-control" value="select file(s)" readonly>
                                    </div></br>
                                    <div class='file-uploaded'>
                                        <p>
                                        <div id="fileListdua">

                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- New Thread Job Family -->
        <div class="modal fade" id="modal_job_family" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ForumController@store') }}" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">New Thread</h4>
                        </div>

                        <div class="modal-body">
                            {{ csrf_field() }}

                            <input type="hidden" name="id_department" value="">
                            <input type="hidden" name="id_job_family" value="{{$job_family->id}}">


                            <div class="form-group">
                                <label for="title" class="col-md-3 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" name="title"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="can_reply" class="col-md-3 control-label">Can Reply</label>
                                <div class="col-md-6">
                                    <select name="can_reply" >
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="content" class="col-md-3 control-label">Content</label>

                                <div class="col-md-10 col-xs-offset-1">
                                    <textarea class="summernote" name="content2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-3 control-label">Upload attachment</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse..
                                        <input type="file"
                                               id="filetiga"
                                               onchange="javascript:updateList3()"
                                               name="file_pendukung[]"
                                               multiple/>
                                    </span>
                                </span>
                                        <input type="text" class="form-control" value="select file(s)" readonly>
                                    </div></br>
                                    <div class='file-uploaded'>
                                        <p>
                                        <div id="fileListtiga">

                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


            {{--modal edit forum--}}


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

            updateList2 = function() {
                var input = document.getElementById('filedua');
                var output = document.getElementById('fileListdua');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }

            updateList3 = function() {
                var input = document.getElementById('filetiga');
                var output = document.getElementById('fileListtiga');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }

            updateList4 = function() {
                var input = document.getElementById('filetiga');
                var output = document.getElementById('fileListtiga');

                output.innerHTML = 'Selected file(s) <br><ul>';
                for (var i = 0; i < input.files.length; ++i) {
                    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';

                }
                output.innerHTML += '</ul>';
            }
        </script>

            {{--edit forum script--}}
        <script>
            function editForum($id_edit,$title,$can_reply,$content,$attachments) {
                window.location.href = '...';
                $("#id_forum_edit").val($id_edit);
                $("#title_edit").val($title);
                $("#can_reply_edit").val($can_reply);

                $("#summernote_edit").summernote("code", $content);
//                $("#content_edit").html($content);

                $("#attachments_edit").html($attachments);

                $('#modal_edit_forum').modal("show");
            }
        </script>
</body>
</html>

