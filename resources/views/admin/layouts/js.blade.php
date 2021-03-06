<!-- Global -->
<script src="{{asset("assets/core/jquery/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/core/bootstrap/js/bootstrap.min.js")}}"></script>

<!--Plugins JS-->
<script src="{{asset("assets/core/perfect-scrollbar/js/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset("assets/core/toastr/js/toastr.min.js")}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

@yield('core-js')

<!--Main JS-->
<script src="{{asset("assets/js/main.js")}}"></script>

@yield('custom-js')