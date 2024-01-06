@extends('backendlayouts.main')
@section('content')
<main id="main-wrapper" class="main-wrapper">
    @include('backendlayouts.sidebar')
    <div id="app-content" style="margin-right: 1em">
        <div class="app-content-area">
            <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
            <div class="container-fluid mt-n22 ">
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <!-- Display forms table -->
                                    <table class="table">
                                        <thead>
                                            <th>Name</th>
                                            <th>Selected</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($forms as $form)
                                            <tr>
                                                <td>{{ $form->name }}</td>
                                                <td>
                                                    <input type="checkbox" class="selected-checkbox" data-id="{{ $form->id}}" {{ $form->selected ? 'checked' : '' }}>
                                                </td>
                                                <td>
                                                    <a href="{{ URL('edit-form-data-only', $form->id) }}" class="btn btn-primary">Edit</a>
                                                    <a href="{{ URL('read-form-builder', $form->id) }}" class="btn btn-primary">Show</a>
                                                    <form method="POST" action="{{ URL('form-delete', $form->id) }}" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this form?')">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                <a href="{{ route('selected_status_update', $form->id) }}" class="btn btn-outline-primary">Update Status</a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Form for selecting a form to be displayed -->
                        <!-- <div class="card mt-4">
                            <div class="card-body">
                                <form method="POST" action="{{ route('update-form', $form->id) }}">
                                    @csrf
                                    <label for="selectForm">Select Form to Display:</label>
                                    <select name="form_id" id="selectForm" class="form-control">
                                        @foreach ($forms as $form)
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $form->name }}" />
                                        <label for="selected">Selected</label>
                                        <input type="checkbox" id="selected" name="selected" value="{{ $form->selected ? 'checked' : '' }}" />
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-success mt-3">Select Form</button>
                                </form>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <script>
    $(document).ready(function() {
    $('.selected-checkbox').change(function() {
        var selected = $(this).is(":checked");
        var id = $(this).data('id');

        $.ajax({
            type: 'post',
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            url: '{{ URL('update-selected-status') }}',
            data: {
                'selected': selected,
                'id': id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(data) {
                console.log(data);
            }
        });
    });
});

</script> -->
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="{{ URL::asset('assets/form-builder/form-builder.min.js') }}"></script>
<script>
    jQuery(function($) {
        var formBuilder = $(document.getElementById('fb-editor')).formBuilder({
            formData: '{{ $form->form_data }}'
        });
        $('form').on('submit', function(e) {
            e.preventDefault();
            var formData = formBuilder.actions.getData();
            $.ajax({
                type: 'post',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: $(this).attr('action'),
                data: {
                    'form': formData,
                    'name': $("#name").val(),
                    'selected': $("#selected").is(":checked"),
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    location.href = "/form-builder";
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection