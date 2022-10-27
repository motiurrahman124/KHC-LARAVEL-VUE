@yield('pre_script')

<script src="{{asset('SuperAdmin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('SuperAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('SuperAdmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('SuperAdmin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('SuperAdmin/dist/js/chosen.jquery.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('SuperAdmin/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('SuperAdmin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('SuperAdmin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('SuperAdmin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('SuperAdmin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('SuperAdmin/plugins/chart.js/Chart.min.js')}}"></script>


<script src="{{asset('SuperAdmin/sweetalert2/dist/sweetalert.min.js')}}"></script>


@yield('post_script')
