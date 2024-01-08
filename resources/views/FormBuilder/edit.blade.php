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
                                <form method="POST" action="{{ route('update-form', $form->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $form->name }}" /><br>
                                    <label for="selected">Selected</label>
                                    <input type="checkbox" id="selected" name="selected" value="{{ $form->selected ? 'checked' : '' }}" /><br><br>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
                    'selected': $("#selected").is(":checked") ? 1 : 0,
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