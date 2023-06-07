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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="#">Profile</a></li>
          </nav>
        <div class="row">
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Emri i Kompanise</th>
            <th scope="col">Mosha</th>
            <th scope="col">Data</th>
            <th scope="col">Vendi</th>
            <th scope="col">Pozita</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td>20</td>
            <td>28/05/2023</td>
            <td>Ferizaj</td>
            <td>Full Stack Web</td>
            <td><a class="btn btn-dark" href="#" role="button">Anulo</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Kompania 2</td>
            <td>20</td>
            <td>28/05/2023</td>
            <td>Ferizaj</td>
            <td>Full Stack Web</td>
            <td><a class="btn btn-dark" href="#" role="button">Anulo</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Kompania 3</td>
            <td>20</td>
            <td>28/05/2023</td>
            <td>Ferizaj</td>
            <td>Full Stack Web</td>
            <td><a class="btn btn-dark" href="#" role="button">Anulo</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    @endsection