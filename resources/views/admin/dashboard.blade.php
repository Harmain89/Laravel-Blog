@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Admin</li>
        <li class="breadcrumb-item">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    Total categories
                    <h2> {{ $category }} </h2>
                </div>
                <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    Total Posts
                    <h2> {{ $posts }} </h2>
                </div>
                <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    Total Users
                    <h2> {{ $users }} </h2>
                </div>
                <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    Total Admin
                    <h2> {{ $admins }} </h2>
                </div>
                <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div> -->
            </div>
        </div>
    </div>
    
    <!-- Simple Charts -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Posts Per Category
                </div>
                <!-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
            </div>
        </div>
    </div>

    <!-- Chart Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Posts Per Category</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>
                    Styling for the area chart can be found in the
                    <code>/js/demo/chart-area-demo.js</code> file.
                </div>
            </div>

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                    Styling for the bar chart can be found in the
                    <code>/js/demo/chart-bar-demo.js</code> file.
                </div>
            </div>

        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                    Styling for the donut chart can be found in the
                    <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>


    @foreach($cat as $itm)
        {{ $itm->name }}
    @endforeach

    
    <h2> {!! json_encode($dt) !!} </h2>
    <h2> {!! json_encode($df) !!} </h2>

    <?php 
    ?>
</div>

<script type="text/javascript">
    var _xdata = JSON.parse('{!! json_encode($cat_names) !!}');
    var _ydata = JSON.parse('{!! json_encode($df) !!}');
</script>



@endsection
