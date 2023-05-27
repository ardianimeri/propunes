@extends('Aplikimet.layout')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

<div class="contenti">
    <div class="posti">
        
            
        @endforeach
        <div class="titulli">
            <h2>{{ $aplikimi->Titulli }}</h2>
        </div>

        <div class="details">
            <a href=""><i class="bi bi-clipboard"></i>{{ $aplikimi->Kategoria}} </a>
            <a href=""><i class="bi bi-geo-alt-fill"></i>{{ $aplikimi->Lokacioni }}</a>
            <a href=""><i class="bi bi-clock"></i>{{ $aplikimi->Orari }}</a>
            <a href=""><i class="bi bi-calendar-week"></i>25.05.2023</a>
        </div>
       
        <div class="description">
            <h5>Job Description</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum blanditiis id aliquam numquam sequi sint deleniti iusto placeat deserunt illo perspiciatis, quos, eaque ullam eius labore vel sunt ratione repellat?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum earum neque adipisci mollitia dignissimos ullam ex unde at quaerat sapiente eaque veritatis pariatur inventore voluptatibus debitis minus numquam, hic accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero beatae aspernatur impedit maiores. Veritatis, nostrum dolor totam voluptatem, ut ratione quasi ipsum nihil iste dolores voluptates at autem fugiat sequi.</p>
        </div>

    </div>
    
    <div class="apliko">
        <div class="tani">
            <h5>Apliko tani</h5>
        </div>
        <div class="ruaj">
            <h5>Ruaj aplikimin</h5>
        </div>
    </div>

</div>

<style>
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




@endsection