@extends('layouts.app')
@section('head')
    <title>Tukonekt Dashboard</title>
@endsection

@section('content')
<div>
    <div style="height: 99vh; width: 99vw;">
        <div class="card">
            <div class="card-body">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" />
                <label for="selected">Selected</label>
                <input type="checkbox" id="selected" name="selected" />
                <div id="fb-editor"></div>
            </div>
            <a href="{{ route('dashboard')}}">
            <button class="btn btn-primary" style="margin-top: -6.5em; margin-left:1.3em;">Home</button>
            </a>
        </div>
    </div>
</div>
<br>       
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ URL::asset('assets/form-builder/form-builder.min.js') }}"></script>
    <script>
        jQuery(function($) {
            $(document.getElementById('fb-editor')).formBuilder({
                onSave: function(evt, formData) {
                    console.log(formData);
                    saveForm(formData);
                },
            });
        });

        function saveForm(form) {
            $.ajax({
                type: 'post',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '{{ URL('save-form-builder') }}',
                data: {
                    'form': form,
                    'name': $("#name").val(),
                    'selected' : $("#selected").is(":checked") ? 1 : 0,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    location.href = "/form-builder";
                    console.log(data);
                }
            });
        }
    </script>
@endsection
