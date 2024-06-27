
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
                        <input type="text" name="Titulli" class="form-control capitalize-first" placeholder="titulli">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pershkrimi</strong>
                        <input type="text" class="form-control capitalize-first" style="height: 150px" name="Pershkrimi" placeholder="pershkrimi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategoria</strong>
                        <input type="text" class="form-control capitalize-first" name="Kategoria" placeholder="kategoria">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lokacioni</strong>
                        <div class="input-group">
                            <select class="form-control capitalize-first" id="Lokacioni" name="Lokacioni">
                                <option value="Prishtine">Ferizaj</option>
                                <option value="Mitrovicë">Mitrovicë</option>
                                <option value="Pejë">Pejë</option>
                                <option value="Prizren">Prizren</option>
                                <option value="Ferizaj">Ferizaj</option>
                                <option value="Gjilan">Gjilan</option>
                                <option value="Gjakovë">Gjakovë</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Orari</strong>
                        <div class="input-group">
                            <select class="form-control capitalize-first" id="Orari" name="Orari">
                                <option value="part-time">Part Time</option>
                                <option value="full-time">Full Time</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <style>
        body {
            overflow-y: auto; /* Enable vertical scrolling for the entire body */
            margin: 0; /* Remove default body margin */
            padding: 0; /* Remove default body padding */
        }
        .shto {
            width: 65%;
            border: solid 1px black;
            border-radius: 18px;
            padding: 17px;
            margin: auto;
            max-height: 70vh; /* Set maximum height if necessary */
            position: relative;
            margin-bottom: 30px;
        }
        @media (max-width: 768px) {
            .shto {
                width: 90%; /* Adjust width for smaller screens */
            }
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
        .capitalize-first { 
            text-transform: capitalize; 
        }

    </style>
@endsection
