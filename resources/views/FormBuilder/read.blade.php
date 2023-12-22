@extends('layouts.app')

    
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ URL('save-form-transaction') }}" class="row justify-content-center" >

            @csrf
            <div class="col-md-8">
            <h4>Feel Free Your Privacy is our Priority</h4>
            <input type="number" id="form_id" name="form_id" hidden/>
            <div id="fb-reader"></div>
            <input type="submit" value="Submit" class="btn btn-primary" />
            
                <!-- First column content -->
               
            </div>
            
        </form>
    </div>
</div>


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ URL::asset('assets/form-builder/form-render.min.js') }}"></script>
    <script>
        $(function() {
            $.ajax({
                type: 'get',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '{{ URL('get-form-builder')}}',
                data: {
                    'id': {{ $id }}
                },
                success: function(data) {
                    $("#form_id").val(data.id);
                    $('#fb-reader').formRender({
                        formData: data.content
                    });
                }
            });
        });
    </script>
@endsection
