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
                            <div class="card-header ">
                                <h4 class="mb-0">List of Registered</h4><br>

                                <span style="display: block; text-align: right;">
                                    <a href="{{ route('pdf.formbuilder')}}" class="btn btn-outline-success">
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
                                                <th>ID</th>
                                                <th>Form ID</th>
                                                <th>Form Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($formData as $data)
                                            <tr>

                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->form_id }}</td>
                                                <td>
                                                    @php
                                                    $form = json_decode($data->form, true);
                                                    @endphp
                                                    @if (is_array($form))
                                                    <ul>
                                                        @foreach ($form as $value)
                                                        <li>{{ $value }}</li>
                                                        @endforeach
                                                    </ul>
                                                    @elseif (!empty($form))
                                                    <p>{{ $data->form }}</p>
                                                    @endif
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