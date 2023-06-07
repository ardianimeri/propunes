<head>
    <meta name="user-id" content="{{ Auth::user()->id }}">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

@extends('layouts.front')
@section('title', 'Profile')
@section('content')
<div class="container">
    <h2>Modal Example</h2>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="open">Open Modal</button>
    <form method="post" action="{{ url('jobposition') }}" id="form">
        @csrf
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="modal-header">
                        <h5 class="modal-title">Jobs Positions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="user_id">User ID:</label>
                                <input type="number" class="form-control" name="user_id" id="user_id"
                                    value="{{ Auth::user()->id }}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="website">Website:</label>
                                <input type="text" class="form-control" name="website" id="website">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" id="ajaxSubmit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <meta name="_token" content="{{ csrf_token() }}" />
</div>

<script>
    jQuery(document).ready(function () {
        jQuery('#ajaxSubmit').click(function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            var userId = $('meta[name="user-id"]').attr('content');
            jQuery.ajax({
                url: "{{ url('/jobposition') }}",
                method: 'post',
                data: {
                    user_id: userId,
                    title: jQuery('#title').val(),
                    date: jQuery('#date').val(),
                    website: jQuery('#website').val(),
                    description: jQuery('#description').val(),
                },
                success: function (result) {
                    if (result.errors) {
                        jQuery('.alert-danger').html('');
                        jQuery.each(result.errors, function (key, value) {
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        jQuery('.alert-danger').hide();
                        $('#open').hide();
                        $('#myModal').modal('hide');
                    }
                },
                error: function (xhr, status, error) {
                    if (xhr.status == 500) {
                        console.log(xhr.responseText);
                    }
                }
            });
        });
    });
</script>
@endsection
