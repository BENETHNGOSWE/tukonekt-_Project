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
                    <th>First Name</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Qr Code</th>
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
                            {!!qrcode('pdf',$register->id)!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Import Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
