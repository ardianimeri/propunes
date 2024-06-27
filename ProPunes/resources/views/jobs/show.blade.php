@extends('layouts.front')

@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .showcontainer {
            margin-top: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenti {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .posti {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .titulli {
            text-align: center;
            margin-bottom: 20px;
        }

        .titulli h2 {
            font-size: 2.5rem;
            color: #333;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .details > div {
            margin-bottom: 10px;
        }

        .details i {
            margin-right: 5px;
            font-size: 1.2rem;
        }

        .description {
            margin: 20px 0;
        }

        .description h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
            text-align:center;
        }

        .description p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
            margin-left: 5em;
            margin-right: 5em;
        }

        .apliko {
            text-align: center;
            margin-top: 20px;
        }

        .tani button {
            background-color: #516685;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .tani button:hover {
            background-color: #405373;
        }

        .alert {
            margin-top: 10px;
        }

        @media only screen and (max-width: 768px) {
            .contenti {
                width: 95%;
                margin-top:3rem;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="showcontainer">
        <div class="contenti">
            <div class="posti p-2">

                <div class="titulli">
                    <h2>{{ $job->Titulli }}</h2>
                </div>

                <div class="details">
                    <div><i class="bi bi-clipboard"></i>{{ $job->Kategoria }}</div>
                    <div><i class="bi bi-geo-alt-fill"></i>{{ $job->Lokacioni }}</div>
                    <div><i class="bi bi-clock"></i>{{ $job->Orari }}</div>
                    <div><i class="bi bi-calendar-week"></i>{{ $job->created_at->format('d.m.Y') }}</div>
                </div>

                <div class="description">
                    <h5>Job Description</h5>
                    <p>{{ $job->Pershkrimi }}</p>
                </div>

            </div>

            @if (Auth::user()->role == 'punekerkues')
                <div class="apliko">
                    <div class="tani">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('jobs.apply', $job->id) }}" method="POST">
                            @csrf
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                </div>
            @elseif(Auth::user()->role == 'punedhenes')
            @endif

        </div>
    </div>

@endsection