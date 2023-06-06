@extends('layouts.front')
@section('title', 'Profile')

@section('content')
<style>
    body {
    background-color: #f3f6f8;
    margin-top: 20px;
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
    background-color: #50C878 !important;
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
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
    -o-box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
    box-shadow: 2px 5px 10px rgba(49, 58, 70, .15);
    color: #fff;
    font-size: 13px;
}

.text-custom {
    color: #50C878 !important;
}

.badge-custom {
    background: #50C878;
    color: #fff;
}

.badge {
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
    padding: .35em .5em;
    font-weight: 500;
}

.text-muted {
    color: #98a6ad !important;
}

.font-13 {
    font-size: 13px !important;
}

.cv-btn {
    background-color: #f8f9fa;
    color: black;
    padding: 0.4rem;
    font-family: sans-serif;
    border-radius: 0.3rem;
    cursor: pointer;
    margin-top: 1rem;
    margin-right: 10px;
    
}
</style>

<div class="row no-gutters" id="home">
        <div class="col-md-6 p-0">
            <div class="rightside d-flex justify-content-center align-items-center">
                <div class="imagewrapper">
                    <!-- <img src="images/asd.jpg"> -->
                </div>
            </div>
        </div>

    </div>
    </div><!-- about section starts -->

    <!-- services section Starts -->
    <!-- services section Ends -->
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

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- meta -->
                    <div class="profile-user-box card-box bg-custom">
                        <div class="row">
                            <div class="col-sm-6"><span class="float-left mr-3"><img
                                        src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="thumb-lg rounded-circle"></span>
                                <div class="media-body text-white">
                                    <h4 class="mt-1 mb-1 font-18"></h4>
                                    <p class="font-13 text-light">Ethical Hacker</p>
                                    <p class="text-light mb-0">Ferizaj, Kosove</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right">
                                    <input type="file" id="actual-btn" hidden />
                                    <label class="cv-btn" for="actual-btn">Upload CV</label>

                                    <button type="button" class="btn btn-light waves-effect"><i
                                            class="mdi mdi-account-settings-variant mr-1" ></i><a href="edit-user-profile.html">Edito Profilin</a></button>
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
                            <p class="text-muted font-13">Hye, I’m Johnathan Doe residing in this beautiful world. I
                                create websites and mobile apps with great UX and UI design. I have done work with big
                                companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra
                                line for filling space. Fill as many you want.</p>
                            <hr>
                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Altrin
                                        Ferati</span></p>
                                <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(+12) 123
                                        1234 567</span></p>
                                <p class="text-muted font-13"><strong>Email :</strong> <span
                                        class="m-l-15">altrin2018@gmail.com</span></p>
                                <p class="text-muted font-13"><strong>Mosha :</strong> <span class="m-l-15"> 20 vjeq
                                    </span></p>
                                <p class="text-muted font-13"><strong>Numri Personal :</strong> <span class="m-l-15">
                                        1248123456
                                    </span></p>
                                <p class="text-muted font-13"><strong>Location :</strong> <span
                                        class="m-l-15">Kosove</span></p>
                            </div>
                            <ul class="social-links list-inline mt-4 mb-0">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Personal-Information -->
                    <div class="card-box ribbon-box">
                        <div class="ribbon ribbon-primary">Mesazhet</div>
                        <div class="clearfix"></div>
                        <div class="inbox-widget">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Dua.com</p>
                                    <p class="inbox-item-text">Pershendetje, nese jeni i interesuar na nevojitet nje
                                        ethical hacker.</p>
                                    <p class="inbox-item-date">
                                        <button type="button"
                                            class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Google.com</p>
                                    <p class="inbox-item-text">Hi, We would love to have you in our team?</p>
                                    <p class="inbox-item-date">
                                        <button type="button"
                                            class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Kjo pune me pelqen, si mund te aplikoj?</p>
                                    <p class="inbox-item-date">
                                        <button type="button"
                                            class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
                                    </p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Pershendetje, deshiroj te ju bej nje pyetje?</p>
                                    <p class="inbox-item-date">
                                        <button type="button"
                                            class="btn btn-icon btn-sm waves-effect waves-light btn-success">Reply</button>
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
                                <h6 class="text-muted text-uppercase mt-0">Diplomimi</h6>
                                <h2 class="" data-plugin="counterup">Bachelor</h2><span
                                    class="badge badge-custom"></span><span class="text-muted"></span>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-paypal float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Eksperienca</h6>
                                <h2 class=""><span data-plugin="counterup">1 vjet</span></h2>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-4">
                            <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Projekte te perfunduara</h6>
                                <h2 class="" data-plugin="counterup">7</h2>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="card-box">
                        <h4 class="header-title mt-0 mb-3">Klientet</h4>
                        <div class="">
                            <div class="">
                                <h5 class="text-custom">Gjirafa</h5>
                                <p class="mb-0">gjirafa50.com</p>
                                <p><b>2022-Vazhdoj</b></p>
                                <p class="text-muted font-13 mb-0">Tek gjirafa50 punoj si part-time pentester, ku testoj
                                    perditesimet qe i bejne ne faqe, gjej mangesite qe kane
                                    dhe me pas i raportoj tek personat qe jane pergjegjes per rregullimin e tyre. Me
                                    gjirafa50 punojme se bashku qe 1 vit dhe jemi nda te kenaqur
                                    te dy palet.
                                </p>
                            </div>
                            <hr>
                            <div class="">
                                <h5 class="text-custom">Wishbytech Kosova</h5>
                                <p class="mb-0">wishbytech.com</p>
                                <p><b>2021-2022</b></p>
                                <p class="text-muted font-13 mb-0">Tek Wishbytech Kosova kam punuar per nje periudhe te
                                    shkurter kohore nga maji i 2021 deri ne janar 2022.
                                    Ne kete kompani kam punuar si defensive cyber security ku kam bere mbrojtjen e faqes
                                    nga sulmet e jashtme.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h4 class="header-title mb-3">Aplikimet</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kompania</th>
                                        <th>Pozita</th>
                                        <th>Paga</th>
                                        <th>Lokacioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gjirafa Video</td>
                                        <td>Pentester</td>
                                        <td>$1,200</td>
                                        <td>Online</td>
                                    </tr>
                                    <tr>
                                        <td>Google</td>
                                        <td>Bug Hunter</td>
                                        <td>$134,000</td>
                                        <td>New York</td>
                                    </tr>
                                    <tr>
                                        <td>Interex</td>
                                        <td>Testues</td>
                                        <td>$800</td>
                                        <td>Prishtine</td>
                                    </tr>
                                    <!-- <tr>
                                        <td>CISCO</td>
                                        <td>Rrjeta Kompjuterike</td>
                                        <td>6 muaj</td>
                                        <td>Po</td>
                                    </tr> -->
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
@endsection