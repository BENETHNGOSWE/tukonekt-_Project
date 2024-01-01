@extends('backendlayouts.main')
@section('content')
<main id="main-wrapper" class="main-wrapper">

    @include('backendlayouts.sidebar')
    <!-- Page content -->
    <div id="app-content">

        <!-- Container fluid -->


        <div class="app-content-area">
            <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
            <div class="container-fluid mt-n22 ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">Dashboard</h3>
                            </div>
                            <div>
                                <a href="{{ URL('formbuilder')}}" class="btn btn-white">Create New Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Total People</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="target" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h3 class="mb-1 fw-bold">TOTAL REG: {{ $total_number }}</h2>
                                    <h3 class="mb-1 fw-bold">TOTAL ATTENDERS: {{ $total_number_attendance}}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Male Registered</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="users" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="  mb-1 fw-bold">{{ $male_count }}</h1>
                                    <p class="mb-0"><span class="text-dark me-2">Total</span>Number</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Female Registered</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="users" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="mb-1 fw-bold">{{ $female_count }}</h1>
                                    <p class="mb-0"><span class="text-dark me-2">Total</span>Number</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Gender Percentages</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="target" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="mb-1 fw-bold"><i class="fas fa-female"></i>: {{ round($female_percentage, 2) }}%</h1>
                                    <h1 class="mb-1 fw-bold"><i class="fas fa-male"></i>: {{ round($male_percentage, 2) }}%</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row ">
                    <div class="col-xl-8 col-12 mb-5">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Demographics By Age Group</h4>

                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <canvas id="ageChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-5 ">
                        <!-- card  -->
                        <div class="card h-80">
                            <!-- card body  -->
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="mb-0">Gender Ratio </h4>
                                </div>

                                <!-- dropdown  -->
                                <div class="dropdown dropstart">
                                    <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" id="dropdownTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-xs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                        <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">Something
                                            else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <canvas id="genderChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<!-- Add this to the head section of your dashboard.blade.php file -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ageGroups = @json($age_groups);

        var ctx = document.getElementById('ageChart').getContext('2d');
        var ageChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(ageGroups),
                datasets: [{
                    label: 'Number of Users by Age Group',
                    data: Object.values(ageGroups),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var genderDistribution = @json($gender_distribution);

        var ctx = document.getElementById('genderChart').getContext('2d');
        var genderChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(genderDistribution),
                datasets: [{
                    data: Object.values(genderDistribution),
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)', // Male
                        'rgba(255, 99, 132, 0.7)', // Female
                        'rgba(255, 206, 86, 0.7)', // Other
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    });
</script>


@endsection