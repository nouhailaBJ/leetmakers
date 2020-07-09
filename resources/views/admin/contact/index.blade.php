@extends('admin.layouts.app')

@section('title')
Your Messages
@endsection

@section('content')
            <div class="">

          <div class="row">
			  <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">

                  <div class="clearfix"></div>
                </div>
				  @if(Session::has('flash_message_success')) 
              <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong> {!! Session('flash_message_success') !!} </strong>
                </div>
              @endif

                <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                    <th>اسم المرسل </th>
						<th> ايميل المرسل </th>
					  <td>الرسالة</td>
                        <th>تاريخ الاضافة</th>
						<td>الافعال</td>
                      </tr>
                    </thead>


                    <tbody>
					  @foreach($contact as $info)
                     <tr>
                    <td>{{ $info->contact_name }}</td>
					<td>{{ $info->contact_email }}</td>
					<td>{{ $info->contact_message }} </td>
                     <td>{{ $info->created_at }}</td>
                        <td>
						<a href="{{ url('/adminpanel/contact/delete/' . $info->id) }}" onclick="return confirm('Are you sure you want to delete this message ?');"class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
                      </tr>
				
						@endforeach
 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
		</div>
@endsection


@section('footer')
        <script src="{{ url('/') }}/js/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.bootstrap.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/jszip.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/pdfmake.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/vfs_fonts.js"></script>
        <script src="{{ url('/') }}/js/datatables/buttons.html5.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/buttons.print.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="{{ url('/') }}/js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
		    <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
@endsection
