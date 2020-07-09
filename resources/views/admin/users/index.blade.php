@extends('admin.layouts.app')
@section('title')
dashboard
@endsection
@section('header')
    <link rel="stylesheet" href="{{ url('/') }}/site/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection
@section('content')
        <div class="row">
      <div class="col-md-12">
    
              <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users </h3>
              <a href="{{ url('/adminpanel/projects/create') }}" class="btn btn-primary float-right"> Add New </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
          @if(Session::has('success')) 
              <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong> {!! Session('success') !!} </strong>
                </div>
              @endif
              <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Intra Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
               @foreach($users as  $user)

              <tr>
                <td>{{$user->intra_username}}</td>
                <td>{{$user->name}}
                </td>
                <td>{{$user->email}}</td>
                <td> 
                  <a href="{{ url('/adminpanel/users/edit/'.$user->id) }}" >Edit</a>
                   <a href="{{ url('/adminpanel/users/delete/'.$user->id) }}" onclick="return confirm('Are you sure?')" id="delete" >Delete</a>
                </td>
              </tr>
              @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
      </div><!-- /.container-fluid -->
   
@endsection

@section('footer')
<script src="{{ url('/') }}/site/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ url('/') }}/site/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

  // let delete = $("#delete");
  // delete.on("click", (e) => {
  //     if(confirm("are you sure") != true)
  //     {
  //       e.preventDefault();
  //     }
  // });




</script>
@endsection