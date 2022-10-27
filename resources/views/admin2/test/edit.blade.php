@extends('admin.layouts.master')
@section('page_title', isset($pageSettings['page_title'])? $pageSettings['page_title']:'Test')
@section('task', isset($pageSettings['task'])? $pageSettings['task']: 'Edit' )

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6" >
                    <!-- general form elements -->
                    <form role="form" method="POST" action="{{route('admin.test.addEdit')}}"
                          enctype="multipart/form-data" onsubmit="return validateForm()">
                        @csrf
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Test</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Test Name" value="{{isset($test) ? $test->name :''}}">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description<span class="text-danger">*</span> </label>
                                    <textarea class="form-control" name="description" id="description" row="10">{{isset($test) ? $test->description :''}}</textarea>
                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file col-sm-8">
                                            <input type="file" class="custom-file-input " name="image" id="image" onchange="loadFile(event)">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            
                                        </div>

                                        <div class="col-sm-4">
                                        	<img id="output" width="200" src="{{isset($test) ? $test->image :''}}"/>
                                            <input type="hidden" id="image_exist" value="{{isset($test->image) ? 1 : ''}}"/>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status"
                                           value="{{STATUS_ACTIVE}}" {{isset($test) ? $test->status==STATUS_ACTIVE ? 'checked' :'' : 'checked'}}>
                                    <label class="form-check-label">Active</label>
                                    <span class="ml-4">
                                            <input class="form-check-input" type="radio" name="status"
                                                   value="{{STATUS_INACTIVE}}" {{isset($test) ? $test->status==STATUS_INACTIVE ? 'checked' :'' : ''}}>
                                            <label class="form-check-label">InActive</label>
                                            </span>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <input type="hidden" name="edit_id" value="{{isset($test) ? $test->id :''}}">
                            <button type="submit" class="btn btn-info">Submit</button>
                            </div>


                        </div>
                        <!-- /.card -->


                    </form>
                </div>

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('post_script')

<script type="text/javascript">

	    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};


function validateForm()
{
	if($('#name').val()=='')
	{
		swal({
			icon:'warning',
			title:'Oops!',
			text:'Please enter Test name!'
		})

		return false;
	}

	else if($('#description').val()=='')
	{
		swal({
			icon:'warning',
			title:'Oops!',
			text:'Please enter Test description!'
		})

		return false;
	}

	else if($('#image').val()=='' && $('#image_exist').val()=='')
	{
		swal({
			icon:'warning',
			title:'Oops!',
			text:'Please upload Test image!'
		})

		return false;
	}

	else
	{
       
		return true;
	}


}
</script>
@endsection