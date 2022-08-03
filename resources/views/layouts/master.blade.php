<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Sb admin styles -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    
    
    <link href="{{ asset('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
    
        <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toast -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- SummerNote CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- DataTable CDN -->
    <link href=" https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    

</head>

<body>
    @include('layouts.inc.admin-navbar')
    
    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        
        <div id="layoutSidenav_content">
            <main>

                <!-- Bootstrap Toast -->
                @if(session('status'))
                    <div class="position-fixed p-3" 
                    style="z-index: 5; right: 0; top: 50px;">
                            <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="500">
                                <div class="toast-header">
                                <i class="fas fa-bell text-info" style="font-size: large;"></i>
                                <strong class="mr-auto pl-3">Notification</strong>
                                <small>1 sec ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body" style="background-color: whitesmoke;">
                                <h6>{{ session('status') }}</h6>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- End Bootstrap Toast -->

                @yield('content')
            </main>
                
            @include('layouts.inc.admin-footer')
        </div>
    </div>
    

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    
    
    <!-- Page level plugins -->
    
    <!-- SummerNote JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#mysummernote").summernote({
                height: 650,
            });
            $('.dropdown-toggle').dropdown();
        });


        // Bootstrap Toast Script
        $('.close').click(function() {
            $('#liveToast').hide();
        });
        setTimeout(function() {
            $('#liveToast').hide();
        }, 6000); // <-- time in milliseconds
            
            
    </script>

    <!-- DataTable JS CDN -->
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>

    <!-- Charts Links -->
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/charts/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/charts/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/js/charts/chart-pie-demo.js') }}"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-bar-demo.js') }}"></script>
    


    <!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script> -->
    <script>
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        } );
    </script>

</body>
</html>