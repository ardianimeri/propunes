@extends('layouts.front')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        #select1 {
            padding: 0;
            height: 40px;
        }

        .row {
            margin-right: 115px;
        }

        .form-floating {
            display: flex;
        }

        .col-auto {
            margin-left: 5px;
        }

        .search {
            display: flex;
        }
    </style>

    <div class="container" style="height:100vh;">
        <div class="row">
            <div class="col-lg-12 margin-tb" style="display: flex; justify-content: space-between; margin-top: 10%; ">
                <div class="pull-left">
                    <h2>Aplikimet</h2>
                </div>
            </div>
        </div>

        <div class="row" id="rows">
            <div class="col-2">
                <div class="form-floating">
                    <select id="select1" class="form-select">
                        <option selected disabled>Lokacioni</option>
                        <option>Prishtine</option>
                        <option>Mitrovice</option>
                        <option>Prizeren</option>
                        <option>Peje</option>
                        <option>Ferizaj</option>
                        <option>Gjilan</option>
                        <option>Gjakove</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating">
                    <select id="select1" class="form-select">
                        <option selected disabled>Orari</option>
                        <option>Full-Time</option>
                        <option>Part-Time</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating">
                    <select id="select1" class="form-select">
                        <option selected disabled>Pozita</option>
                        <option>Mitrovice</option>
                        <option>Prizeren</option>
                        <option>Peje</option>
                        <option>Ferizaj</option>
                        <option>Gjilan</option>
                        <option>Gjakove</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating">
                    <select id="select1" class="form-select">
                        <option selected disabled>Paga</option>
                        <option>Mitrovice</option>
                        <option>Prizeren</option>
                        <option>Peje</option>
                        <option>Ferizaj</option>
                        <option>Gjilan</option>
                        <option>Gjakove</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating">
                    <select id="select1" class="form-select">
                        <option selected disabled>Data</option>
                        <option>Mitrovice</option>
                        <option>Prizeren</option>
                        <option>Peje</option>
                        <option>Ferizaj</option>
                        <option>Gjilan</option>
                        <option>Gjakove</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating">
                    <form class="search" type="get" action="{{ url('/search') }}">
                        <div class="col-auto">
                            <input type="search" name="querry" class="form-control" id="inputPassword2"
                                placeholder="Search">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-text-center">
            <div class="roww">
                <div class="col">

                </div>
            </div>
        </div>
        @foreach ($jobs as $job)
            <div class="container-text-center" style="border: solid 1px black; margin: 5px">
                <div class="roww">
                    <div class="col">
                        <a href="{{ route('jobs.show', ['job' => $job->id]) }}">{{ $job->Titulli }}</a>
                        <h4>{{ $job->Lokacioni }}</h4>

                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
