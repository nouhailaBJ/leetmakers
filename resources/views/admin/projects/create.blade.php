@extends('admin.layouts.app')
@section('title')
dashboard
@endsection

@section('content')
		
		 <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Projetcs</h3>
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
              <form role="form" action="{{ url('/adminpanel/projects/store') }}" method="POST"enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Title :</label>
                    <input type="text" name ="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">project description</label>
                    <textarea type="text" class="form-control" name="project_description" id="exampleInputEmail1" placeholder="Enter description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image Project</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Other Images Project</label>
                    <input type="file" class="form-control" name="images[]" multiple="multiple">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">tags</label>
                    <input type="text" class="form-control" name="tags" id="exampleInputEmail1" placeholder="Enter tags">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">started At</label>
                    <input type="date" class="form-control" name="startedAt" id="exampleInputEmail1" placeholder="Enter startedAt">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ended At</label>
                    <input type="date" class="form-control" name="endedAt" id="exampleInputEmail1" placeholder="Enter endedAt">
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

