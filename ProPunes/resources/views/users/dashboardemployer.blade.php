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
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Address</th>
            
            <th scope="col">Lokacioni</th>
            <th scope="col">Titulli i punes</th>         
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            @foreach ($item['applicants'] as $applicant)
                <tr>
                    <td>{{ $applicant->id}}</td>
                    <td>{{ $applicant->name }}</td>
                    <td>{{ $applicant->surname }}</td>
                    <td>{{ $applicant->address }}</td>
                    <td>{{ $applicant->location }}</td>
                    <td>{{ $item['job']->Titulli }}</td>
                    <td><form action="{{ route('applications.destroyApplications', ['id' => $applicant->id, 'applicationId' => $item['job']->id]) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Fshij</button>
            </form>
</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
      </table>
    </div>

    @endsection