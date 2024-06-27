<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @yield('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
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

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: #000;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #000;
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
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

        .leftside,
        .rightside {
            height: 50vh;
            width: 100%;
        }

        .footer {
            position: static;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="text-success"><b>PRO</b></span>PUNES</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    @if (Auth::user()->role == 'punekerkues')
                    @elseif(Auth::user()->role == 'punedhenes')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/jobs/create') }}">AddJobs</a>
                        </li>
                    @endif

                    @if (Auth::user()->role == 'punekerkues')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('jobs.store') }}">Jobs</a>
                        </li>
                    @elseif(Auth::user()->role == 'punedhenes')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('jobs.store') }}">Jobs</a>
                        </li>
                    @elseif(Auth::user()->role == 'admin')
                    @endif
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->role == 'admin')
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('users.dashboardadmin') }}">Dashboard</a>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::check())
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endif
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->role == 'punekerkues')
                                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                                        @elseif(Auth::user()->role == 'punedhenes')
                                            <a class="dropdown-item"
                                                href="{{ route('user.profile-employer') }}">Profile</a>
                                        @endif
                                    @endauth
                                @endif

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="dropdown-item btn"
                                        @click.prevent="$root.submit();">Logout
                                    </button>
                                </form>
                            </div>
                        </div>
            </div>
            </li>
            </ul>
        </div>
    </nav>
    @yield('content')



    <div class="footer">
        <footer class="bg-light p-2 text-center">
            <div class="container">
                <p class="text-black">All Right Reserved By ©PROPUNES</p>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
