@extends('Aplikimet.layout')

@section('content')

<style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
        * {
            font-family: 'Montserrat', sans-serif;
        }

        body{
            background-color: #E7F3FF;
        }

        .navbar .getstarted {
            max-width: 100%;
            background: #106eea;
            margin-left: 30px;
            border-radius: 4px;
            font-weight: 400;
            color: #fff;
            text-decoration: none;
            padding: .5rem 1rem;
            line-height: 2.3;
        }
        .navbar-nav a {
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 500;
        }
        .navbar-light .navbar-brand {
            color: #000;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: #000;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #000;
        }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
            color: #000;
        }
        .w-100 {
            height: 100vh;
        }
        .navbar-toggler {
            padding: 1px 5px;
            font-size: 18px;
            line-height: 0.3;
            background: #fff;
        }
        @media only screen and (max-width: 767px) {
            .navbar-nav {
                text-align: center;
            }
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
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-success"><b>PRO</b></span>PUNES</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/Aplikimet/read') }}">About</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="{{ url('/Aplikimet/create') }}">Services</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('aplikimet.store') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

<div class="contenti">
    <div class="posti">
        
            
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




@endsection