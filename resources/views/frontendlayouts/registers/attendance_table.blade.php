<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Attendance Table
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Attendance Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendance as $entry)
                                    <tr>
                                        <td>{{ $entry->user->id }}</td>
                                        <td>{{ $entry->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>