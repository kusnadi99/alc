@include('Admin.AdminHead')
@extends('Admin.Template')
@section('section')
<?php require_once "cuteeditor_files/include_CuteEditor.php" ?>
<script>
$(function() {
    $('#Optionals').hide(); 
    $('#MySelect').change(function(){
        if($('#MySelect').val() == '3') {
            $('#Optionals').show(); 
        } else {
            $('#Optionals').hide(); 
        } 
    });
});
</script>

    <div class="col-md-12">
	       <div class="panel panel-default">
                <div class="panel-heading">Trainning Description</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('TrainingController@store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="module" class="col-md-4 control-label">Module</label>                                     
                            <div class="col-md-6">
								<select name="module" id="MySelect" onchange="changeFunc();" class="selectpicker" >
									@foreach($module as $modul)
                                    <option value="{{$modul->id}}">{{$modul->nama}}</option>
                                    @endforeach
								</select><br>
                            </div>

                        </div>
						
						<div class="form-group">
                            <label for="title" class="col-md-4 control-label">Trainning Title</label>

                            <div class="col-md-6">
                                <input id="title" placeholder="Trainning Title" type="text" class="form-control" name="title"  required autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Trainning Description</label>

                            <div class="col-md-6">
								<?php   
							                //Step 2: Create Editor object. 
							               	$id  =Auth::user()->id;
							                $editor=new CuteEditor();     
							                //Step 3: Set a unique ID to Editor
							                $editor->ID="content";
											$editor->Width="auto";
							                $editor->AutoConfigure="Simple";
							                $editor->ImageGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->MediaGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->FlashGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->FilesGalleryPath= sprintf("/Uploads/%s",$id);
							                $editor->TemplateGalleryPath= sprintf("/Uploads/%s",$id);
							                //Step 4: Render Editor   
							                $editor->Draw();   
							            ?>
                            </div>
                        </div>
						
						
						
                        <div id="Optionals" class="form-group">
                            <label for="department" class="col-md-4 control-label">Select Departement</label>
							<div class="col-md-6">
								<select name="department" class="selectpicker" data-live-search="true">
                                    
                                    @foreach($department as $dept)
									<option value="{{$dept->id_department}}">{{$dept->nama_departmen}}</option>
                                    @endforeach
								</select><br>
                            </div>
                        </div>
							
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next Step
                                </button>
                            </div>
                        </div>
                    </form>
				</div>
	</div>
</div>

@endsection