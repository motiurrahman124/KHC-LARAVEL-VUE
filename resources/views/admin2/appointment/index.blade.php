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
                        Date
                    </th>
                    <th>
                        Doctor
                    </th>
                    <th>
                        Message
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
                ajax: "{{ route('admin.appointment')}}",
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
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'doctor',
                        name: 'doctor'
                    },
                    {
                        data: 'message',
                        name: 'message'
                    },

                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',

                    },

                ],
            });

            $(document).on('click', '.delete', function () {

                return confirm("Are You Sure To Delete This!");

            });

        });
    </script>
@endsection
