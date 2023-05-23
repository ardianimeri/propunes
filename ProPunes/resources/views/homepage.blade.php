<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
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

.leftside, .rightside{
    height:50vh;
    width: 100%;
}
#home{
    max-width: 100%;
}

#about{
    height: 100vh;
    background: rgb(255,255,255);
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(208,215,250,1) 100%);
    display: flex;
    align-items: center;
}

.services .card-body i {
	font-size: 50px;
}
.team .card-body i {
	font-size: 20px;
}
#services{
    height: 100vh;
}

#services h2{
    padding-top: 4rem;
}


@media screen and (min-width:768px) {
    .leftside, .rightside{
        height:100vh;
    }

}

@media only screen and (max-width: 767px) {
    .navbar-nav {
		text-align: center;
	}
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        gap:10px;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(.5 * var(--bs-gutter-x));
        margin-left: calc(.5 * var(--bs-gutter-x));
    }

    
}

.display-1{
    text-align: center;
    font-size: 3.6rem;
    padding-bottom: 2%;
    margin-bottom: 0;
    border-bottom: solid 1px black;
   
}
.display-0{
    text-align: center;
    font-size: 2rem;
    font-weight: 350;
  
}
.rightside .imagewrapper img { 
    max-width:100%; 
    height:auto; 
}
img{
    height:100%;
}
.button{
    display: flex;
    align-items: center;
    justify-content: center;
}
button {
    cursor: pointer;
    font-weight: 700;
    font-family: Helvetica,"sans-serif";
    transition: all .2s;
    padding: 5px 10px;
    border-radius: 100px;
    background: dark;
    border: 1px solid transparent;
    display: flex;
    align-items: center;
    font-size: 15px;
  }
  
  button > svg {
    width: 34px;
    margin-left: 10px;
    transition: transform .3s ease-in-out;
  }
  
  button:hover svg {
    transform: translateX(5px);
  }
  
  button:active {
    transform: scale(0.95);
  }

  .stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0); 
}
.contact{
    height: 100vh;
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(208,215,250,1) 100%);
}
  .footer{
    max-width:100%;
  }
  
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else 
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="row no-gutters"  id="home">
        <div class="col-md-6 p-0">
            <div class="rightside d-flex justify-content-center align-items-center">
                <div class="imagewrapper">
                    <img src="images/asd.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="leftside d-flex justify-content-center align-items-center">
                <div class="titlewrapper">
                    <h1 class="mbr-section-title mbr-fonts-style display-1">
                        Më <b>Lehtë</b> dhe <b>Shpejtë</b>
                    </h1>
                    <h2 class="mbr-section-title mbr-fonts-style display-0">
                        Gjeni dhe aplikoni për punë
                        <br>
                        brenda pak minutave
                    </h2>
                    <div class="button">
                        <button>
                            <span>Kërko</span>
                            <svg width="34" height="34" viewBox="0 0 74 74" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                                <path
                                    d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                                    fill="black"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div><!-- about section starts -->
<section class="about section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img"><img alt="" class="img-fluid" src="images/ssss-PhotoRoom.png-PhotoRoom.png"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2>Ne ofrojmë mundësi të shumta<br>
                    Për <b>JU</b></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                    <a class="btn btn-warning" href="#contact">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services section Starts -->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Ofrojmë</h2>
                    <p>Veçori të shërbimeve dhe marrëveshjeve</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body ">
                        <i class="material-symbols-outlined">
                            computer
                            </i>
                        <h3 class="card-title">Kualitet të Lartë</h3>
                        <p class="lead">Shërbim aplikimi i kualitetit të lartë pa pasur nevojë shpenzim kohe</p>
                      </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="material-symbols-outlined">
                            diversity_2
                        </i>
                        <h3 class="card-title">Llojllojshmëri</h3>
                        <p class="lead">Konkurse të fushave të ndryshme të industrisë private apo edhe publike</p>                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                        <i class="material-symbols-outlined">
                            diversity_3
                            </i>
                        <h3 class="card-title">Partnerë</h3>
                        <p class="lead">Partnerë nga fusha të ndryshme të industrisë nga i gjithë territori ynë</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- services section Ends -->
<!-- Contact starts -->
<!--<section id="contact" class="contact section-padding">
    <div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
                <form action="#" class="bg-transparent p-4 m-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input class="form-control" placeholder="Full Name" required="" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input class="form-control" placeholder="Email" required="" type="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
                            </div>
                        </div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  </section>-->
<!-- footer starts -->	
<div class="footer ">
	<footer class="bg-light p-2 text-center">
		<div class="container">
			<p class="text-black">All Right Reserved By ©PROPUNES</p>
		</div>
	</footer>
</div>
	<!-- footer ends -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>