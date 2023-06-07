@extends('layouts.front')
@section('title', 'AdminDash')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tbl-container{
            max-height: fit-content;
        }
        .tbl-fixed{
            overflow-y:scroll;
            height: fit-content;
            max-height: 35vh;
            margin-top: 20px;
        }
        .table{
            min-width: min-content;
        }
        .table thead{
            position: sticky;
            top: 0px;
            background: white;
            text-align: center;
        }
        .table td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="Përdoruesit">
        <div class="container tbl-container" style="margin-top: 10%;">
            <h3 style="font-size:20px; ">Përdoruesit</h3>
            <div class="row tbl-fixed">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Emri</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roli</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td><a class="btn btn-dark bg-success border-0" href="#" role="button">Përditso</a></td>
                                <td><a class="btn btn-dark bg-danger border-0" href="#" role="button">Fshij</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="Punët">
        <div class="container tbl-container" style="margin-top: 10%;">
        <h3 style="font-size:20px; ">Punët</h3>
            <div class="row tbl-fixed">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Emri Kompanis</th>
                            <th scope="col">Vendi</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->ID_P}}</td>
                                <td>{{$job->Titulli}}</td>
                                <td>{{$job->Lokacioni}}</td>
                                <td><a class="btn btn-dark bg-danger border-0" href="#" role="button">Fshij</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection