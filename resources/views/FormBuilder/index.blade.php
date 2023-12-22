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
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table">
                                        <thead>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($forms as $form)
                                            <tr>
                                                <td>{{ $form->name }}</td>
                                                <td>
                                                    <a href="{{ URL('edit-form-builder', $form->id) }}" class="btn btn-primary">Edit</a>
                                                    <a href="{{ URL('read-form-builder', $form->id) }}" class="btn btn-primary">Show</a>
                                                    <form method="POST" action="{{ URL('form-delete', $form->id) }}" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this form?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection