@extends('admin.layouts.master')
@section('post_header')
    <link rel="stylesheet" href="{{asset('SuperAdmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('SuperAdmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('page_title', isset($pageSettings['page_title']) ? $pageSettings['page_title']:'Table')
@section('task', isset($pageSettings['task']) ? $pageSettings['task']: 'List' )

@section('content')

    <div class="card">

        <div class="card-body">
            <table class="table table-bordered table-striped" id="table">
                <thead>
                <tr>
                    <th>
                        SL
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                        Phone Number
                    </th>
                    <th>
                        address
                    </th>
                    <th>
                        Product
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        quantity
                    </th>
                    <th>
                        price/qty
                    </th>
                    <th>
                        total_price
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
                processing: true,
                serverSide: true,
                pageLength: 25,
                responsive: true,
                ajax: "{{ route('admin.orders')}}",
                order: [1, 'desc'],
                autoWidth: false,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',

                        searchable:false,
                        orderable: false,
                    },

                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'product_name',
                        name: 'product_name',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },

                    {
                        data: 'total_price',
                        name: 'total_price'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false

                    },{
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false

                    },

                ],
            });

            $(document).on('click', '.delete', function () {

                return confirm("Are You Sure To Delete This!");

            });

        });
    </script>
@endsection
