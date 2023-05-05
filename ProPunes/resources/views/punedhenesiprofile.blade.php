<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Profili i Punedhenesit</title>
</head>
<body>
    <style>
        body{
    background-color: #f3f6f8;
    margin-top:20px;
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.profile-user-box {
    position: relative;
    border-radius: 5px
}
.bg-custom {
    background-color: #50C878!important;
}
.profile-user-box {
    position: relative;
    border-radius: 5px;
}

.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}
.inbox-widget .inbox-item img {
    width: 40px;
}

.inbox-widget .inbox-item {
    border-bottom: 1px solid #f3f6f8;
    overflow: hidden;
    padding: 10px 0;
    position: relative
}

.inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px
}

.inbox-widget .inbox-item img {
    width: 40px
}

.inbox-widget .inbox-item .inbox-item-author {
    color: #313a46;
    display: block;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px
}

.comment-list .comment-box-item {
    position: relative
}

.comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px
}

.comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px
}

.comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.comment-list a+a {
    margin-top: 15px;
    display: block
}

.ribbon-box .ribbon-primary {
    background: #50C878;
}

.ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    -o-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    color: #fff;
    font-size: 13px;
}
.text-custom {
    color: #50C878!important;
}

.badge-custom {
    background: #50C878;
    color: #fff;
}
.badge {
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    padding: .35em .5em;
    font-weight: 500;
}
.text-muted {
    color: #98a6ad!important;
}

.font-13 {
    font-size: 13px!important;
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#login">Log In</a>
                    </li>
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
       
    </div>
</div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-user-box card-box bg-custom">
                        <div class="row">
                            <div class="col-sm-6"><span class="float-left mr-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="thumb-lg rounded-circle"></span>
                                <div class="media-body text-white">
                                    <h4 class="mt-1 mb-1 font-18">Ardian Imeri</h4>
                                    <p class="font-13 text-light">Full Stack Web Development</p>
                                    <p class="text-light mb-0">Ferizaj, Kosove</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right">
                                    <button type="button" class="btn btn-light waves-effect"><i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Personal-Information -->
                    <div class="card-box">
                        <h4 class="header-title mt-0">Personal Information</h4>
                        <div class="panel-body">
                            <p class="text-muted font-13">Hye, I’m Johnathan Doe residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.</p>
                            <hr>
                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Ardian Imeri</span></p>
                                <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(+12) 123 1234 567</span></p>
                                <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">ardianimeri@gmail.com</span></p>
                                <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">Kosove</span></p>
                                <p class="text-muted font-13"><strong>Languages :</strong> <span class="m-l-5"><span class="flag-icon flag-icon-us m-r-5 m-t-0" title="us"></span> <span>English</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-de m-r-5" title="de"></span> <span>German</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-es m-r-5" title="es"></span> <span>Spanish</span> </span><span class="m-l-5"><span class="flag-icon flag-icon-fr m-r-5" title="fr"></span> <span>French</span></span>
                                </p>
                            </div>
                            <ul class="social-links list-inline mt-4 mb-0">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Personal-Information -->
                    <div class="card-box ribbon-box">
                        <div class="ribbon ribbon-primary">Messages</div>
                        <div class="clearfix"></div>
                        <div class="inbox-widget">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">Pershendetje, a eshte kjo pozite ende e lire?</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">Hi, a ka vende te lira ende?</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Kjo pune me pelqen, si mund te aplikoj?</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Pershendetje, deshiroj te ju bej nje pyetje?</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <!-- <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Adhamdannaway</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-layers float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Pozita te lira</h6>
                                <h2 class="" data-plugin="counterup">5</h2><span class="badge badge-custom"></span><span class="text-muted"></span></div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-paypal float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Paga mesatare</h6>
                                <h2 class="">$<span data-plugin="counterup">782</span></h2><span class="badge badge-custom">+29% </span><span class="text-muted">Me shume se viti i kaluar</span></div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Punetore te punesuar</h6>
                                <h2 class="" data-plugin="counterup">1,890</h2><span class="badge badge-custom">+89% </span><span class="text-muted">Me shume se viti i kaluar</span></div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="card-box">
                        <h4 class="header-title mt-0 mb-3">Kompanite</h4>
                        <div class="">
                            <div class="">
                                <h5 class="text-custom">Viva Fresh Store</h5>
                                <p class="mb-0">vivafreshstore.com</p>
                                <p><b>2010-Current</b></p>
                                <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-custom">Elkos</h5>
                                <p class="mb-0">elkos.com</p>
                                <p><b>2007-Current</b></p>
                                <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h4 class="header-title mb-3">Aplikimet</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Emri i aplikuesit</th>
                                        <th>Mosha</th>
                                        <th>Data</th>
                                        <th>Vendi</th>
                                        <th>Pozita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Arianit Sadriu</td>
                                        <td>19</td>
                                        <td>07/05/2023</td>
                                        <td>Davidovc</td>
                                        <td>Viva Fresh Store</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Erjon Avdija</td>
                                        <td>18</td>
                                        <td>07/05/2023</td>
                                        <td>Ferizaj</td>
                                        <td>Viva Fresh Store</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Oltion Mustafa</td>
                                        <td>20</td>
                                        <td>07/05/2023</td>
                                        <td>Ferizaj</td>
                                        <td>Elkos</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Altrin Ferati</td>
                                        <td>20</td>
                                        <td>07/05/2023</td>
                                        <td>Ferizaj</td>
                                        <td>Viva Fresh Store</td>
                                    </tr>
                                    <!-- <tr>
                                        <td>5</td>
                                        <td>Adminox Admin</td>
                                        <td>01/01/2015</td>
                                        <td>07/05/2015</td>
                                        <td><span class="label label-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
        <div class="footer ">
            <footer class="bg-light p-2 text-center">
                <div class="container">
                    <p class="text-black">All Right Reserved By ©PROPUNES</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
