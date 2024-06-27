<div>
    <div>
        @extends('layouts.front')
        @section('title', 'Profile')

        @section('content')
            <style>
                body {
                    background-color: #f3f6f8;
                    margin-top: 20px;
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

            
        </div><!-- about section starts -->


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
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
                                        <form action="{{ route('files.store') }}" method="POST"
                                            enctype="multipart/form-data" id="form">
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
                                        href="{{ route('files.download', $user->file->id) }}"><strong>ARBK Certificate: {{ $user->file->file_name}}</strong></a>
                                        @else
                                        <span class="text-muted font-13"><strong>No ARBK Certificate uploaded</strong></span>
                                        @endif
                                </div>
                                <ul class="social-links list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a title="" data-placement="top"
                                            data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top"
                                            data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top"
                                            data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Personal-Information -->
                        
                    </div>
                    <div class="col-xl-8">
                        <div class="jobs-positions">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Job Postings</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Location</th>
                                                <th>Schedule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $job)
                                                <tr>
                                                    <td>{{ $job->Titulli }}</td>
                                                    <td>{{ $job->Pershkrimi }}</td>
                                                    <td>{{ $job->Kategoria }}</td>
                                                    <td>{{ $job->Lokacioni }}</td>
                                                    <td>{{ $job->Orari }}</td>
                                                    <td>
                                                        <a href="{{ route('job.edit', ['job' => $job->id]) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <form action="{{ route('jobs.destroy', $job->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                </div>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-box">
                            @foreach ($data as $jobData)
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Applicants for {{ $jobData['job']->Titulli }}</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Resume</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jobData['applicants'] as $applicant)
                                                    <tr>
                                                        <td>{{ $applicant->name }}</td>
                                                        <td>{{ $applicant->email }}</td>
                                                        <td>{{ $applicant->phone }}</td>
                                                        <td> <a
                                                                href="{{ route('files.download', $applicant->file->id) }}">Download</a>
                                                        </td>
                                                        <td>
                                                            <form
                                                                action="{{ route('applications.deny', ['id' => Auth::user()->id, 'applicationId' => $applicant->id]) }}"
                                                                method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">Deny</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                    </div>
                </div>
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

</div>
