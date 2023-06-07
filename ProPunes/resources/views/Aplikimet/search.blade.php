@extends('Aplikimet.layout')

@section('content')
    <div class="container-text-center">
        <div class="roww">
            <div class="col">

            </div>
        </div>
    </div>
    @foreach ($aplikimet as $aplikimi)
        <div class="container-text-center" style="border: solid 1px black; margin: 5px">
            <div class="roww">
                <div class="col">
                    <a href="{{ url('/Aplikimet/show') }}">{{ $aplikimi->Titulli }}</a>
                    <h4>{{ $aplikimi->Lokacioni }}</h4>

                </div>
            </div>
        </div>
    @endforeach
@endsection
