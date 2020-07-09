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
              <h3 class="card-title">Projects</h3>
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
                <th>Title</th>
                <th>project description</th>
                <th>tags</th>
                <th>startedAt</th>
                <th>endedAt</th>
              </tr>
              </thead>
              <tbody>
               @foreach($projects as  $project)

              <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->project_description}}
                </td>
                <td>{{$project->tags}}</td>
                <td>{{$project->startedAt}}</td>
                <td>{{$project->endedAt}}</td>
                <td> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $project->id }}">
                    add sponsors
                  </button>
                  <a href="{{ url('/adminpanel/projects/edit/'.$project->id) }}" >Edit</a>
                   <a href="{{ url('/adminpanel/projects/delete/'.$project->id) }}" onclick="return confirm('Are you sure?')" id="delete" >Delete</a>
                </td>
              </tr>
<div class="modal fade" id="exampleModal{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project Sponsors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form role="form" action="{{ url('/adminpanel/projects/sponsors') }}" method="POST"enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <input type="hidden" name="idProject" value="{{ $project->id }}">
                    <label for="exampleInputEmail1">Sponsors :</label>
                    <select name="idSponsore">
                      @foreach($sponsors as $spo)
                      <option value="{{ $spo->id}}">{{ $spo->url}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
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