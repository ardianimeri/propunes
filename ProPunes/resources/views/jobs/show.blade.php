@extends('layouts.front')

@section('content')

<style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
        * {
            font-family: 'Montserrat', sans-serif;
        }

        body{
            background-color: #E7F3FF;
        }
         .contenti{
        margin-top: 10%;
        display: flex;
        }
        .posti{
            background-color: #fff;
            margin-right: 1%;
            border: 1px solid black;
        }
        .tani{
            border: 1px solid black;
            border-radius: 5%;
            width: 100%;
            text-align: center;
            color: #fff;
            padding: 2%;
            background-color: #516685;
        }
        .ruaj{
            margin-top: 10%;
            border: 1px solid black;
            border-radius: 5%;
            width: 100%;
            text-align: center;
            color: #516685;
            padding: 2%;
        }
        .apliko{
            width: 100%
        }
        .details{
            display: flex;  
            margin: 0px 40px 0px 40px;
            justify-content: space-between;
        }
        .details a{
            color: #000;
            text-decoration: none;
        }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<div class="container" style="height: 100vh;">
<div class="contenti">
    <div class="posti p-2">
        
            
        <div class="titulli">
            <h2>{{ $job->Titulli }}</h2>
        </div>

        <div class="details">
            <a href=""><i class="bi bi-clipboard"></i>{{ $job->Kategoria}} </a>
            <a href=""><i class="bi bi-geo-alt-fill"></i>{{ $job->Lokacioni }}</a>
            <a href=""><i class="bi bi-clock"></i>{{ $job->Orari }}</a>
            <a href=""><i class="bi bi-calendar-week"></i>25.05.2023</a>
        </div>
       
        <div class="description">
            <h5>Job Description</h5>
            <p>{{ $job->Pershkrimi }}</p>
        </div>

    </div>
    
    @if(Auth::user()->role == 'punekerkues')
    <div class="apliko">
        <div class="tani">
            <h5>Apliko tani</h5>
        </div>
        <div class="ruaj">
            <h5>Ruaj aplikimin</h5>
        </div>
    </div>
    @elseif(Auth::user()->role == 'punedhenes')
    
    @endif

</div>
</div>
@endsection