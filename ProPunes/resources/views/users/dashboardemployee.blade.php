@extends('layouts.front')
@section('title', 'Profile')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 10%;">
        <div class="row">
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulli</th>
            <th scope="col">Pershkrimi</th>
            <th scope="col">Kategoria</th>
            
            <th scope="col">Lokacioni</th>
            <th scope="col">Orari</th>
            <td></td>           
          </tr>
        </thead>
        <tbody>
          @foreach($jobs as $job)
          <tr>
            <td>{{$job->id}}</td>
            <td>{{$job->Titulli}}</td>
            <td>{{$job->Pershkrimi}}</td>
            <td>{{$job->Kategoria}}</td>
            <td>{{$job->Lokacioni}}</td>
            <td>{{$job->Orari}}</td>
            <td><form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Anulo</button>
            </form>
</td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>

    @endsection