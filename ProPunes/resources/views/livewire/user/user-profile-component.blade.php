<div>
    @extends('layouts.front')
    @section('title', 'Profile')

    @section('content')
        <style>
            body {
                background-color: #f3f6f8;
                margin-top: 20px;
            }
            a {
                color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
                 /* text-decoration: underline; */
                text-decoration: none;
            }
            .thumb-lg {
                height: 88px;
                width: 88px;
            }

            .profile-user-box {
                position: relative;
                border-radius: 5px
            }

            .bg-custom {
                background-color: #50C878 !important;
            }

            .profile-user-box {
                position: relative;
                border-radius: 5px;
            }

            .card-box {
                padding: 20px;
                border-radius: 3px;
                margin-bottom: 30px;
                background-color: #fff;
            }
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
                margin-top: 4rem;
            }
            .inbox-widget .inbox-item img {
                width: 40px;
            }

            .inbox-widget .inbox-item {
                border-bottom: 1px solid #f3f6f8;
                overflow: hidden;
                padding: 10px 0;
                position: relative
            }

            .inbox-widget .inbox-item .inbox-item-img {
                display: block;
                float: left;
                margin-right: 15px;
                width: 40px
            }

            .inbox-widget .inbox-item img {
                width: 40px
            }

            .inbox-widget .inbox-item .inbox-item-author {
                color: #313a46;
                display: block;
                margin: 0
            }

            .inbox-widget .inbox-item .inbox-item-text {
                color: #98a6ad;
                display: block;
                font-size: 14px;
                margin: 0
            }

            .inbox-widget .inbox-item .inbox-item-date {
                color: #98a6ad;
                font-size: 11px;
                position: absolute;
                right: 7px;
                top: 12px
            }

            .comment-list .comment-box-item {
                position: relative
            }

            .comment-list .comment-box-item .commnet-item-date {
                color: #98a6ad;
                font-size: 11px;
                position: absolute;
                right: 7px;
                top: 2px
            }

            .comment-list .comment-box-item .commnet-item-msg {
                color: #313a46;
                display: block;
                margin: 10px 0;
                font-weight: 400;
                font-size: 15px;
                line-height: 24px
            }

            .comment-list .comment-box-item .commnet-item-user {
                color: #98a6ad;
                display: block;
                font-size: 14px;
                margin: 0
            }

            .comment-list a+a {
                margin-top: 15px;
                display: block
            }

            .ribbon-box .ribbon-primary {
                background: #50C878;
            }

            .ribbon-box .ribbon {
                position: relative;
                float: left;
                clear: both;
                padding: 5px 12px 5px 12px;
                margin-left: -30px;
                margin-bottom: 15px;
                font-family: Rubik, sans-serif;
                -webkit-box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
                -o-box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
                box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
                color: #fff;
                font-size: 13px;
            }

            .text-custom {
                color: #50C878 !important;
            }

            .badge-custom {
                background: #50C878;
                color: #fff;
            }

            .badge {
                font-family: Rubik, sans-serif;
                -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
                box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
                padding: .35em .5em;
                font-weight: 500;
            }

            .text-muted {
                color: #98a6ad !important;
            }

            .font-13 {
                font-size: 13px !important;
            }

            .cv-btn {
                background-color: #f8f9fa;
                color: black;
                padding: 0.4rem;
                font-family: sans-serif;
                border-radius: 0.3rem;
                cursor: pointer;
                margin-top: 1rem;
                margin-right: 10px;

            }

            #form {
                display: flex;

            }
        </style>


        </div>
    </div>

    <div class="content">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12 ">
                    <!-- meta -->
                    <div class="profile-user-box card-box bg-custom">
                        <div class="row">
                            <div class="col-sm-6"><span class="float-left mr-3"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="thumb-lg rounded-circle"></span>
                                <div class="media-body text-white">
                                    <h4 class="mt-1 mb-1 font-18">{{ Auth::user()->name }}</h4>
                                    <p class="font-13 text-light">{{ $user->profession }}</p>
                                    <p class="text-light mb-0">{{ $user->address }}</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right">
                                    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data"
                                        id="form">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" name="file">
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Submit"
                                            style="height: fit-content">
                                    </form>
                                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('message'))
                                    <div class="alert alert-warning">
                                        {{ session('message') }}
                                    </div>
                                @endif
                        @if (session('file'))
                    <div class="alert alert-info">
                        <p>File Uploaded: {{ session('file')->file_name }}</p>
                        <p><a href="{{ asset('storage/' . session('file')->file_path) }}" target="_blank">View File</a></p>
                    </div>
                @endif
                                    <button type="button" class="btn btn-light waves-effect"><i
                                            class="mdi mdi-account-settings-variant mr-1"></i><a
                                            href="{{ route('profile.show', ['id' => $user->id]) }}">Edito
                                            Profilin</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Personal-Information -->
                    <div class="card-box">
                        <h4 class="header-title mt-0">Personal Information</h4>
                        <div class="panel-body">
                            <p class="text-muted font-13">{{ $user->bio }}</p>
                            <hr>
                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Full Name :</strong> <span
                                        class="m-l-15">{{ $user->name }} {{ $user->surname }}</span></p>
                                <p class="text-muted font-13"><strong>Mobile :</strong><span
                                        class="m-l-15">{{ $user->number }}</span></p>
                                <p class="text-muted font-13"><strong>Email :</strong> <span
                                        class="m-l-15">{{ $user->email }}</span></p>
                                <p class="text-muted font-13"><strong>Mosha :</strong> <span
                                        class="m-l-15">{{ $user->age }}
                                    </span></p>
                                <p class="text-muted font-13"><strong>Numri Personal :</strong> <span class="m-l-15">
                                        {{ $user->id }}
                                    </span></p>
                                <p class="text-muted font-13"><strong>Location :</strong> <span
                                        class="m-l-15">{{ $user->location }}</span></p>
                                        @if ($user->file)
                                        <a class="text-muted font-13"
                                        href="{{ route('files.download', $user->file->id) }}"><strong>Download CV: {{ $user->file->file_name}}</strong></a>
                                        @else
                                        <span class="text-muted font-13"><strong>No CV uploaded</strong></span>
                                        @endif
                            </div>
                            <ul class="social-links list-inline mt-4 mb-0">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top"
                                        data-toggle="tooltip" class="tooltips" href=""
                                        data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Personal-Information -->
                   
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-layers float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Diplomimi</h6>
                                <h2 class="" data-plugin="counterup">{{ $user->grade }}</h2><span
                                    class="badge badge-custom"></span><span class="text-muted"></span>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-paypal float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Eksperienca</h6>
                                <h2 class=""><span data-plugin="counterup">{{ $user->experience }}</< /span>
                                </h2>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Projekte te perfunduara</h6>
                                <h2 class="" data-plugin="counterup">{{ $user->projects }}</< /h2>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="jobs-positions">
                        <div class="card-box">
                            <h3>Applications:</h3>
                            @if ($applications->isEmpty())
                                <p>No applications found.</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Job Position</th>
                                            <th></th>
                                            <!-- Add more table headers as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                            <tr>
                                                <td>{{ $application->Titulli }}</td>
                                                <td>{{ $application->Kategoria }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('applications.destroyApplications', ['id' => Auth::user()->id, 'applicationId' => $application->id]) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Cancel</button>
                                                    </form>
                                                </td>
                                                <!-- Adjust the date format as needed -->
                                                <!-- Add more table cells for additional data -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                            <head>
                                <meta name="user-id" content="{{ Auth::user()->id }}">
                            </head>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

                            <!-- Trigger the modal with a button -->
                            <!-- <button type="button" style="background-color:#50C878;"class="btn btn-success my-3"
                                data-toggle="modal" data-target="#myModal" id="open">Create</button>
                            <form method="post" action="{{ url('jobposition') }}" id="form"> -->
                                <!-- @csrf
                                <div class="modal" tabindex="-1" role="dialog" id="myModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="alert alert-danger" style="display:none"></div>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Jobs Positions</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="user_id">User ID:</label>
                                                        <input type="number" class="form-control" name="user_id"
                                                            id="user_id" value="{{ Auth::user()->id }}" readonly>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title"
                                                            id="title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="date">Date:</label>
                                                        <input type="date" class="form-control" name="date"
                                                            id="date">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="website">Website:</label>
                                                        <input type="text" class="form-control" name="website"
                                                            id="website">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description"
                                                            id="description">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button class="btn btn-success" id="ajaxSubmit">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <meta name="_token" content="{{ csrf_token() }}" /> -->


                            <script>
                                jQuery(document).ready(function() {
                                    jQuery('#ajaxSubmit').click(function(e) {
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
                                            success: function(result) {
                                                if (result.errors) {
                                                    jQuery('.alert-danger').html('');
                                                    jQuery.each(result.errors, function(key, value) {
                                                        jQuery('.alert-danger').show();
                                                        jQuery('.alert-danger').append('<li>' + value +
                                                        '</li>');
                                                    });
                                                } else {
                                                    jQuery('.alert-danger').hide();
                                                    $('#open').hide();
                                                    $('#myModal').modal('hide');
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                if (xhr.status == 500) {
                                                    console.log(xhr.responseText);
                                                }
                                            }
                                        });
                                    });
                                });
                            </script>
                            <!-- <h4 class="header-title mt-0 mb-3">Klientet</h4> -->
                            <!-- @foreach ($user->jobposition as $position)
                                <div class="">
                                    <h5 class="text-custom">{{ $position->title }}</h5>
                                    <p class="mb-0">{{ $position->website }}</p>
                                    <p><b>{{ $position->date }}</b></p>
                                    <p class="text-muted font-13 mb-0">{{ $position->description }}
                                    </p>
                                    <div>

                                        <head>
                                            <meta name="user-id" content="{{ Auth::user()->id }}">

                                            <form action="{{ route('jobposition.destroy', $position->id) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                    </div>
                                </div>
                                <hr>
                            @endforeach -->
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- container -->
@endsection
</div>
