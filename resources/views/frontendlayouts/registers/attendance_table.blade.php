@extends('backendlayouts.main')
@section('content')
<main id="main-wrapper" class="main-wrapper">

@include('backendlayouts.sidebar')
    <div id="app-content" style="margin-right: 1em">

        <!-- Container fluid -->

        <div class="app-content-area">
            <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
            <div class="container-fluid mt-n22 ">

                <!-- row  -->
                <div class="row">
                    <div>

                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <!-- <div class="card-header ">
                                <h4 class="mb-0">List of Registered</h4><br>
                                <form method="GET" action="/filterdata">
                                    <div class="row">
                                        <div class="col-sm-4" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                                        <label>Start Date</label>
                                        <input type="date" name="start_date" class="form-control">
                                        </div>
                                        <div class="col-sm-4" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" class="form-control">
                                        </div>
                                        <div class="col-sm-4" style="display: flex; align-items: center;">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                        
                                    </div>
                                    <span style="display: block; text-align: left;">
                                    <div class="col-md-3">
                                        
                                    </div>
                                    <div class="col-md-3">
                                       
                                    </div>
                                    <div class="col-md-1">
                                        
                                    </div>
                                    </span>
                                </form>
                                <span style="display: block; text-align: right;">
                                    <a href="{{ route('export_view.registers')}}" class="btn btn-outline-primary">
                                        <i data-feather="file-text" class="text-info"></i>excel
                                    </a>
                                    <a href="{{ route('pdf.registers')}}" class="btn btn-outline-success">
                                        <i data-feather="file-text" class="text-info"></i>pdf
                                    </a>
                                </span>
                            </div> -->
                            <!-- table  -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S/n</th>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>Attendance Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($attendance as $entry)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{ $entry->user->first_name}}</td>
                                                <td>{{ $entry->user->id}}</td>
                                                <td>{{ $entry->created_at}}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- card footer  -->

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection