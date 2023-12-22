<!DOCTYPE html>
<html>
<head>
    <title>Evaluation</title>
    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Add custom styles */
        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0,0,0,.075);
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h3>Evalution Form with registered data</h3>
            <p>Date: {{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>
        </div>
        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 table-centered">
            <thead class="table-dark">
                <tr>
                    <th>S/n</th>
                    <th>Form ID</th>
                    <th>Form Data</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $form->id }}</td>
                                <td>{{ $form->form_id }}</td>
                                <td>
                                    @php
                                        $form = json_decode($form->form, true);
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
