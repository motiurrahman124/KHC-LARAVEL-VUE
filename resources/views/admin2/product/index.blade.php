@extends('admin.layouts.master')
@section('page_title', isset($pageSettings['page_title'])? $pageSettings['page_title']:'Product')
@section('task', isset($pageSettings['task'])? $pageSettings['task']: 'List' )
@section('post_header')
    <link rel="stylesheet" href="{{asset('SuperAdmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('SuperAdmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{isset($page_title) ? $page_title : 'Products'}}</h3>

            <div class="card-tools">
                <a type="button" class="btn btn-block btn-outline-primary btn-sm" href="{{route('admin.product.addEdit')}}">Add
                    New Product</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table cell-border table-compact  table-hover" id="table">
                <thead>
                <tr>
                    <th>
                        SL
                    </th>
                    <th>
                       Thumbnail
                    </th>
                    <th>
                     Product Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                        Action
                    </th>

                </tr>
                </thead>

                <tbody>

                </tbody>
            </table>

            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.modal -->
    <!-- /.End Package Assign Modal -->
@endsection

@section('post_script')

    <!-- DataTables -->
    <script src="{{asset('SuperAdmin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('SuperAdmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('SuperAdmin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('SuperAdmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#table').DataTable({

                columnDefs: [
                                    {"className": "dt-center hover", "targets": "_all"}
                                  ],
                processing: true,
                serverSide: true,
                pageLength: 25,
                responsive: true,
                searchable:false,
                orderable: false,

                ajax: "{{route('admin.product.list')}}",
                order: [1, 'desc'],
                autoWidth: false,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        "targets": 0,
                        "orderable": false,
                        "searchable": false,
                    },

                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },

                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                    	data:'status',
                    	name: 'status'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        "targets": 0,
                        "orderable": false,
                         "searchable": false,
                    }
                ]
            });

            $(document).on('click', '.delete', function () {

                return confirm("Are You Sure To Delete This!");

            });

        });
    </script>
@endsection