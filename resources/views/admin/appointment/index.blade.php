@extends('admin.layouts.master')
@section('post_header')
    <link rel="stylesheet" href="{{asset('SuperAdmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('SuperAdmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('page_title',)
@section('task',  )

@section('content')

    <div class="card">

        <div class="card-body">
            <table class="table table-bordered table-striped">
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
                        Email
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
                    <tr>
                        <td></td>
                    </tr>
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
    
@endsection
