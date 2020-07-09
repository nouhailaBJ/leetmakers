@extends('admin.layouts.app')
@section('title')
Sponsors
@endsection
@section('header')
    <link rel="stylesheet" href="{{ url('/') }}/site/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection
@section('content')
        <div class="row">
      <div class="col-md-12">
    
              <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sponsors</h3>
              <a href="{{ url('/adminpanel/sponsors/create') }}" class="btn btn-primary float-right"> Add New </a>
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
                <th>Url</th>
                <th>Logo</th>
              </tr>
              </thead>
              <tbody>
               @foreach($sponsors as  $sponsor)

              <tr>
                <td>{{$sponsor->url}}</td>
                <td><img src="{{ url('/uploads/sponsors/'.$sponsor->logo) }}" style="height: 50px;">
                <td> 
                   <a href="{{ url('/adminpanel/sponsors/delete/'.$sponsor->id) }}" onclick="return confirm('Are you sure?')" id="delete" >Delete</a>
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