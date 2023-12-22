<main id="main-wrapper" class="main-wrapper">

    <div id="app-content" style="margin-right: 1em">

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
                                        <h4 class="mb-0">Total Registerd</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i data-feather="briefcase" height="20" width="20"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class=" mb-1 fw-bold">{{ $total_number }}</h1>
                                    <p class="mb-0"><span class="text-dark me-2"></span>All people</p>
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
                                <div class="d-flex justify-content-between align-items-center
            mb-3">
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
                <!-- row  -->
                <div class="row ">
                    <div class="col-xl-8 col-12 mb-5">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header ">
                                <h4 class="mb-0">List of Registered</h4>
                                <span style="display: block; text-align: right;">
                                    <a href="{{ route('export_view.registers')}}" class="btn btn-outline-primary">
                                        <i data-feather="file-text" class="text-info"></i>excel
                                    </a>
                                    <a href="{{ route('pdf.registers')}}" class="btn btn-outline-success">
                                        <i data-feather="file-text" class="text-info"></i>pdf
                                    </a>
                                </span>
                            </div>
                            <!-- table  -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>First Name</th>
                                                <th>Phone Number</th>
                                                <th>Gender</th>
                                                <th>Qr Code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registers as $register)
                                            <tr>
                                                <td>{{ $register->first_name}}</td>
                                                <td>{{ $register->phone_number}}</td>
                                                <td>{{ $register->gender}}</td>
                                                <td>
                                                    {!!qrcode('excel',$register->id)!!}
                                                </td>
                                                <td>
                                                    <div class="form-button-action d-flex align-items-center">
                                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-lg mx-2" data-original-title="View Task">
                                                            <a href="{{ route('show.registers', $register)}}">
                                                                <i data-feather="eye" class="text-info"></i>
                                                            </a>
                                                        </button>
                                                        <form class="delete_form ml-2" action="{{ route('delete.registers', $register) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger btn-lg mx-2" data-original-title="View Task">
                                                                <i data-feather="trash" class="text-info"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- card footer  -->
                            <div class="card-footer text-center">
                                <a href="#!" class="btn btn-primary">View All Registered People</a>

                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-5 ">
                        <!-- card  -->
                        <div class="card h-80">
                            <!-- card body  -->
                            <div class="card-header d-flex align-items-center
                        justify-content-between">
                                <div>
                                    <h4 class="mb-0">Tasks Performance </h4>
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

                                <!-- chart  -->
                                <div class="mb-6">
                                    <div id="perfomanceChart"></div>
                                </div>
                                <!-- icon with content  -->
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="text-center">
                                        <i class="icon-sm text-success" data-feather="check-circle"></i>
                                        <h1 class="fs-2 mb-0 ">76%</h1>
                                        <p>Completed</p>
                                    </div>
                                    <div class="text-center">
                                        <i class="icon-sm text-warning" data-feather="trending-up"></i>
                                        <h1 class="fs-2 mb-0 ">32%</h1>
                                        <p>In-Progress</p>
                                    </div>
                                    <div class="text-center">
                                        <i class="icon-sm text-danger" data-feather="trending-down"></i>
                                        <h1 class="fs-2 mb-0 ">13%</h1>
                                        <p>Behind</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>