@extends('backendlayouts.main')
@section('content')
<main id="main-wrapper" class="main-wrapper">

    <div id="app-content" style="margin-right: 1em">

        <!-- Container fluid -->

        <div class="app-content-area">
            <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
            <div class="container-fluid mt-n22 ">
               
                <!-- row  -->
                <div class="row">
                    <div >
                        
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header ">
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
                            </div>
                            <!-- table  -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S/n</th>
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
                                                <td>{{ $loop->iteration}}</td>
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
                           
                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</main>
@endsection