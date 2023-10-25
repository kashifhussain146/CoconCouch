<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
  
  <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .nav-sidebar>.nav-item{
      font-size: 14px;
    }
  </style>
@stack('css')

@yield('inlinecss')
</head>
<style>
    .error{
        color:#ff4444;
    }
    #editor1-error{
        display: block;
    }
    .select2-container .select2-selection--single{
      height: auto!important;
    }
</style>
<script type="text/javascript">

    var base_url = "{!!url('/')!!}"

    var images_limit = 1

    
  </script>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('admin.layouts.pagehead')  
  @include('admin.layouts.sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('breadcrum')
    
    @yield('content')
    <!-- /.content-header -->


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  
  $('.select2').select2();

  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
{{-- <script src="{{asset('admin/js/jquery.validate.min.js')}}"></script> --}}


@stack('js')
@yield('inlinejs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        function buttonLoading(processType, ele){
        if(processType == 'loading'){
            ele.html(ele.attr('data-loading-text'));
            ele.attr('disabled', true);
        }else{
            ele.html(ele.attr('data-rest-text'));
            ele.attr('disabled', false);
        }
    }

    function successMsg(heading,message, html = ""){
        Swal.fire({
            title: heading,
            text: message,
            icon: 'success',
            confirmButtonText: 'Ok !'
            }).then((result) => {
                if (result.isConfirmed) {
                    if(html!=''){
                        location.href = html;
                    }else{
                        location.reload();
                    }
                    
                }
            })
    }

    function errorMsg(heading,message){

        Swal.fire({
            title: heading,
            text: message,
            icon: 'danger',
            showCancelButton: false,
            
            confirmButtonText: 'Ok !'
            }).then((result) => {
                if (result.isConfirmed) {
                
                }
            })
    }



  
    $(document).on('click','.deleteButton', function(){
          // Show SweetAlert popup with confirm button
          var url = $(this).attr('data-url');

          Swal.fire({
            title: 'Are you sure?',
            text: 'This action cannot be undone!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!',
          }).then((result) => {
            if (result.isConfirmed) {
              // Show loader on confirm
              Swal.fire({
                title: 'Loading...',
                allowOutsideClick: false,
                onBeforeOpen: () => {
                  Swal.showLoading();
                },
              });

              // Perform the action (API call, etc.)
              performApiCall(url)
                .then(() => {
                  // Close the SweetAlert popup after the action is complete
                  Swal.close();

                  // Show a success message (optional)
                  Swal.fire({
                    icon: 'success',
                    title: 'Action completed successfully!',
                    showConfirmButton: false,
                    timer: 1500 // Adjust the time according to your preference
                  });

                  row = $(this).closest('tr');
                  row.remove();
                })
                .catch((error) => {
                  // Close the SweetAlert popup after the action is complete
                  Swal.close();

                  // Show an error message (optional)
                  Swal.fire({
                    icon: 'error',
                    title: 'Error performing action',
                    text: error.message // Display an appropriate error message
                  });
                });
            }
          });
  });


  function performApiCall(url) {
  // Replace the URL with your API endpoint
  const apiUrl = url;//'https://api.example.com/endpoint';

  // Replace this data with your actual payload for the API call (if needed)
  const requestData = {
    '_token':'{{csrf_token()}}'
  };

  // Return a Promise that resolves when the API call is completed successfully
  return new Promise((resolve, reject) => {
    $.ajax({
      url: apiUrl,
      type: 'POST', // Change the HTTP method as per your API requirements
      data: requestData,
      success: function(response) {
        // If the API call is successful, resolve the Promise
        resolve(response);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // If the API call fails, reject the Promise with the error message
        reject(new Error(errorThrown));
      }
    });
  });
}

</script>

<!-- ChartJS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('admin/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script> --}}
</body>
</html>
