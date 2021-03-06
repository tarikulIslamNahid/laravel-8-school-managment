<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 12:49:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin')}}/assets/img/favicon.ico"/>

    <link href="{{asset('admin')}}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('admin')}}/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('admin')}}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{asset('admin')}}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
{{-- data table --}}
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/plugins/table/datatable/dt-global_style.css">
{{-- data table --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@yield('style')
</head>
<body>
        {{-- Header & Sub Header Content  --}}
        @include('backend.layouts.topbar')
        {{-- Header & Sub Header Content  --}}
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('backend.layouts.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin')}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{asset('admin')}}/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('admin')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('admin')}}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('admin')}}/plugins/apex/apexcharts.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/dashboard/dash_1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
        toastr.options.timeOut = 800;
           toastr.options.progressBar = true;
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;

           case 'success':
           toastr.success(" {{ Session::get('message') }} ");

           break;

           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;

           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break;
        }
        @endif
       </script>
@yield('script')
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 12:49:05 GMT -->
</html>
