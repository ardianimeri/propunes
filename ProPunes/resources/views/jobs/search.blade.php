@extends('layouts.front')

@section('content')
    <div class="container-text-center">
        <div class="roww">
            <div class="col">

            </div>
        </div>
    </div>
    @foreach ($jobs as $job)
        <div class="container-text-center" style="border: solid 1px black; margin-top: 100px" >
            <div class="roww">
                <div class="col">
                    <a href="{{ url('/jobs/show') }}">{{ $job->Titulli }}</a>
                    <h4>{{ $job->Lokacioni }}</h4>

                </div>
            </div>
        </div>
    @endforeach
@endsection
