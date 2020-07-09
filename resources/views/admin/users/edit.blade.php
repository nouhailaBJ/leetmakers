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
                <h3 class="card-title">Add User</h3>
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
              <form role="form" action="{{ url('/adminpanel/users/update/'.$user->id) }}" method="POST" enctype="multipart/form-data">
              	@csrf
                @method('PUT')
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Intra userName :</label>
                    <input type="text" name ="intra_username" value="{{ $user->intra_username }}" class="form-control" id="exampleInputEmail1" placeholder="Enter userName">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name"value="{{ $user->name }}"  id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" class="form-control" name="desc" id="exampleInputEmail1" placeholder="Enter description of user" value="{{ $user->desc }}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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

