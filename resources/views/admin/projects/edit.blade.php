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
                <h3 class="card-title">Edit project</h3>
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
              <form role="form" action="{{ url('/adminpanel/projects/update/'.$project->id) }}" method="POST" enctype="multipart/form-data">
              	@csrf
                @method('PUT')
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Title :</label>
                    <input type="text" name ="title" value="{{ $project->title }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <textarea type="text" class="form-control" name="project_description" id="exampleInputEmail1" placeholder="Enter description">{{ $project->project_description }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tags</label>
                    <input type="text" class="form-control" name="tags" value="{{ $project->tags }}" id="exampleInputEmail1" placeholder="Enter Tags">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">started At</label>
                    <input type="date" class="form-control" name="startedAt" value="{{ $project->startedAt }}" id="exampleInputEmail1" placeholder="Enter startedAt">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ended At</label>
                    <input type="date" class="form-control" name="endedAt" value="{{ $project->endedAt }}" id="exampleInputEmail1" placeholder="Enter EndedAt">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">edit</button>
                </div>
              </form>
            </div>

          </div>

        </div>
   
@endsection

