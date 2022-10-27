@extends('admin.layouts.master')
@section('page_title', isset($pageSettings['page_title'])? $pageSettings['page_title']:'Dashboard')
@section('task', isset($pageSettings['task'])? $pageSettings['task']: '' )
@section('content')


    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-notes-medical"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="{{route('admin.orders')}}">Total Order</a></span>
                        <span class="info-box-number">{{ $data['total_order'] }}<small></small>
                </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-medical"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="{{route('admin.orders')}}">Today's Order</a></span>
                        <span class="info-box-number">{{ $data['todays_order'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-medical-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="{{route('admin.test.appointment')}}">Total Test Appointment</a></span>
                        <span class="info-box-number">{{ $data['total_testAppointment'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-deaf"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><a href="{{route('admin.test.appointment')}}">Today's Test Appointment</a></span>
                        <span class="info-box-number">{{ $data['todays_testAppointment'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">


                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"><label class="text-danger">Latest Orders</label></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Item Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>

                        @if (isset($data['order']))

                            @foreach ($data['order'] as $order)
                                    <tr>
                                    <td># {{$loop->iteration}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone_number}}</td>
                                    <td>{{$order->product->name}}</td>
                                    <td>
                                         @if ($order->status == ORDER_COMPLETED)

                                       <span class="badge badge-success">Completed</span>

                                        @elseif ($order->status == ORDER_PENDING)
    
                                    <span class="badge badge-primary">Pending</span>

                                        @else

                                     <span class="badge badge-danger">Cancelled</span>
                                        @endif
                                     </td>
                                    <td>
                                        {{$order->created_at ? Carbon\Carbon::parse($order->created_at)->format('d M, Y') : ''}}
                                    </td>
                                    </tr>
                            @endforeach

                        @endif

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{route('admin.orders')}}" class="btn btn-sm btn-danger float-left">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-warning">
                    <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><label>Today's Appointment</label></span>
                        <span class="info-box-number">{{ $data['todays_appointment'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-success">
                    <span class="info-box-icon"><i class="far fa-heart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><label>Order In Review</label></span>
                        <span class="info-box-number">{{ $data['oredr_inreview'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-danger">
                    <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><label>Test Appointment In Review</label></span>
                        <span class="info-box-number">{{ $data['testAppointment_inreview'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="far fa-comment"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><label>Appointment In Review</label></span>
                        <span class="info-box-number">{{ $data['appointment_inreview'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

                <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-6">


                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"><label class="text-info">Latest Test Appointment</label></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Test Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data['testAppointment']))

                            @foreach ($data['testAppointment'] as $testAppointment)
                                    <tr>
                                    <td># {{$loop->iteration}}</td>
                                    <td>{{$testAppointment->name}}</td>
                                    <td>{{$testAppointment->phone_number}}</td>
                                    <td>{{$testAppointment->test_name}}</td>
                                    <td>
                
                                        @if ($testAppointment->status == CONFIRMED)

                                                <span class="badge badge-info">Confirmed</span>

                                        @elseif ($testAppointment->status == IN_REVIEW)

                                                <span class="badge badge-primary">In Review</span>

                                        @elseif ($testAppointment->status == CANCELLED)
                                                <span class="badge badge-danger">Cancelled</span>

                                        @else  
                                                <span class="badge badge-success">Completed</span>

                                        @endif
                                     </td>
                                    <td>
                                        {{$testAppointment->date ? Carbon\Carbon::parse($testAppointment->date)->format('d M, Y') : ''}}
                                    </td>
                                    </tr>
                            @endforeach

                        @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{route('admin.test.appointment')}}" class="btn btn-sm btn-info float-left">View All Test Appointment</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

                
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title"><label class="text-primary">Latest Appointment</label></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                     @if (isset($data['appointment']))

                            @foreach ($data['appointment'] as $appointment)
                                    <tr>
                                    <td># {{$loop->iteration}}</td>
                                    <td>{{$appointment->name}}</td>
                                    <td>{{$appointment->phone_number}}</td>
                                    <td>{{$appointment->doctor}}</td>
                                    <td>
                
                                        @if ($appointment->status == CONFIRMED)

                                                <span class="badge badge-info">Confirmed</span>

                                        @elseif ($appointment->status == IN_REVIEW)

                                                <span class="badge badge-primary">In Review</span>

                                        @elseif ($appointment->status == CANCELLED)
                                                <span class="badge badge-danger">Cancelled</span>

                                        @else  
                                                <span class="badge badge-success">Completed</span>

                                        @endif
                                     </td>
                                    <td>
                                        {{$appointment->date ? Carbon\Carbon::parse($appointment->date)->format('d M, Y') : ''}}
                                    </td>
                                    </tr>
                            @endforeach

                        @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="{{route('admin.appointment')}}" class="btn btn-sm btn-primary float-left">View All Appointment</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

                

            </div>
            <!-- /.col -->
        </div>
    </div><!--/. container-fluid -->
@endsection
