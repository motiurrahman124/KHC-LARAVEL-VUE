@extends('admin.layouts.master')
@section('page_title', isset($pageSettings['page_title'])? $pageSettings['page_title']:'Product')
@section('task', isset($pageSettings['task'])? $pageSettings['task']: 'Create' )

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6" >
                    <!-- general form elements -->
                    <form role="form" method="POST" action="{{route('admin.product.addEdit')}}"
                          enctype="multipart/form-data" onsubmit="return validateForm()">
                        @csrf
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Product Name">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price <span class="text-danger">*</span> </label>
                                    <input type="number" class="form-control" name="price" id="price"
                                           placeholder="Price" step=".1">
                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file col-sm-8">
                                            <input type="file" class="custom-file-input " name="image" id="image" onchange="loadFile(event)">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            
                                        </div>

                                        <div class="col-sm-4">
                                        	<img id="output" width="200" />
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status"
                                           value="{{STATUS_ACTIVE}}" checked="">
                                    <label class="form-check-label">Active</label>
                                    <span class="ml-4">
                                            <input class="form-check-input" type="radio" name="status"
                                                   value="{{STATUS_INACTIVE}}">
                                            <label class="form-check-label">InActive</label>
                                            </span>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
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
			text:'Please enter Product name!'
		})

		return false;
	}

	else if($('#price').val()=='')
	{
		swal({
			icon:'warning',
			title:'Oops!',
			text:'Please enter Product price!'
		})

		return false;
	}

	else if($('#image').val()=='')
	{
		swal({
			icon:'warning',
			title:'Oops!',
			text:'Please upload Product image!'
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