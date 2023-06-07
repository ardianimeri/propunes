@extends('layouts.front')

@section('content')




    <div class="row">
        <div class="col-lg-12 margin-tb" style="display: flex; justify-content:space-between;">
            <div class="pull-left">
                <h2>Shto Aplikim</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jobs.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong>there was some problems.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    @endif
    <div class="shto">
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Titulli</strong>
                        <input type="text" name="Titulli" class="form-control" placeholder="titulli">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pershkrimi</strong>
                        <textarea class="form-control" style="height: 150px" name="Pershkrimi" placeholder="pershkrimi"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategoria</strong>
                        <input type="text" class="form-control" name="Kategoria" placeholder="kategoria">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokacioni</strong>
                        <input type="text" class="form-control" name="Lokacioni" placeholder="lokacioni">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Orari</strong>
                        <input type="text" class="form-control" name="Orari" placeholder="orari">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <style>
        .shto {
            width: 65%;
            border: solid 1px black;
            border-radius: 18px;
            padding: 17px;
            margin: auto;
            height: 612px;
            margin-top: 1%;
            position: relative;
        }

        .col-md-12 {
            margin: 1%;
        }

        .col-lg-12 {
            width: 63%;
            margin-top: 4%;
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-left: 18%;
        }
    </style>
@endsection
