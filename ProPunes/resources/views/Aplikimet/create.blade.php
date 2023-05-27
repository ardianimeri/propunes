@extends('Aplikimet.layout')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
    <div class="container">
        <a class="navbar-brand" href="#">
            <span class="text-warning"><b>PRO</b></span>PUNES</a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#jobs">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#login">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="row">
    <div class="col-lg-12 margin-tb" style="display: flex; justify-content:space-between;">
        <div class="pull-left">
            <h2>Shto Aplikim</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aplikimet.index') }}">Back</a>
        </div>
    </div>
</div>




  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong>there was some problems.<br>
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
        </div>      
  @endif
  <div class="shto">
<form action="{{ route('aplikimet.store') }}" method="POST">
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
                <input type="text" class="form-control"  name="Kategoria" placeholder="kategoria">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokacioni</strong>
                <input type="text" class="form-control"  name="Lokacioni" placeholder="lokacioni">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orari</strong>
                <input type="text" class="form-control"  name="Orari" placeholder="orari">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
</div>
<style>
    .shto{
    width: 65%;
    border: solid 1px black;
    border-radius: 18px;
    padding: 17px;
    margin: auto;
    height: 612px;
    margin-top: 1%;
    position: relative;
}
    .col-md-12{
        margin: 1%;
    }
    .col-lg-12{
    width: 63%;
    margin-top: 4%;
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-left: 18%;
    }
</style>
@endsection