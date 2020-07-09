@extends('admin.layouts.app')
@section('title')
sponsors
@endsection

@section('content')
		
		 <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add sponsors</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
              <form role="form" action="{{ url('/adminpanel/sponsors/store') }}" method="POST"enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Name :</label>
                    <input type="text" name ="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Logo</label>
                    <input type="file" class="form-control" name="image">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>

          </div>

        </div>
   
@endsection

