

    </div>
     <!-- /. WRAPPER  -->
     
 <!-- JQUERY SCRIPTS -->
    <script src="{{asset('admin/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('admin/assets/js/jquery.metisMenu.js')}}"></script>
    
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{asset('admin/assets/js/dataTables/jquery.dataTables.js')}}"></script>

    <script src="{{asset('admin/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#slider-dataTables').dataTable();
        });
    </script>


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>toastr.error('{{$error}}')</script>
            @endforeach
            @endif

    {!! Toastr::message() !!}


</body>
</html>