<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event - Interoperability</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/bootstrap.min.css')}}" >
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('template/assets1/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/newStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/responsive.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/fonts/font-awesome.min.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/fonts/simple-line-icons.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/slicknav.css')}}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/nivo-lightbox.css')}}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/animate.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/owl.carousel.css')}}">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/colors/default.css')}}" media="screen" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
    <!--Header-->
    <div id="divLang">
        Language :
        <select class="selectpicker" data-width="fit">
            <option value="en">
               En
            </option>

            <option value="fr">
                Fr
            </option>
        </select>  
    </div>
<!-- Call to action Section End -->

<section class="countdown-timer section">
    <div id="particles-js"></div>
    <center>
        <img src="{{ asset('template/assets1/images/pnglogo-ansie.png') }}" height="150px" width="270px" alt="logo-ansie">
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="text">
                    <h2>Djibouti<br>Interoperability Framework Seminar</h2>
                    <h4>Djibouti Palace Kempinski <br> oct 04, 2021</h4>
                    <a href="{{ url('/registration') }}" class="btn btn-lg btn-common">Registration</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="time-countdown">
                    <span id="clock"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featured" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">Why Join</h2>
                <p class="section-subcontent wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                    Interoperability is both a prerequisite for and a facilitator of the efficient delivery of public services. The Interoperability framework aims to improve:
                </p>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/handshake.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>Interministerial Cooperation</h4>
                            <p>
                                Cooperation between public administration structures with a view to establishing better services provided to its users.                            
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/statistics.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>Administrative Efficiency</h4>
                            <p>
                                Sharing and reuse of information between public administration structures, to increase administrative efficiency and reduce red tape for citizens and businesses.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/data-transfer.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>Information Exchange</h4>
                            <p>
                                The exchange of information between public administration actors to meet legal requirements or political commitments.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="schedule" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">Schedule</h2>
              
                <div class="main-board wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">

                    <ul class="nav nav-tabs day" role="tablist">
                        <li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">04 OCT <br> <span>Morning</span></a></li>
                        <li role="presentation" ><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">04 OCT <br> <span>Afternoon</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="day1">
                            <div class="row">
                                <div class="col-md-12 board text-center">
                                    <div class="column-1 col-md-3 col-sm-5">
                                        <ul class="nav nav-pills event-time-list">
                                            <li><span>Time</span>
                                                <ul>
                                                    <li class="color-1"><span>9:00 - 9:05</span></li>
                                                    <li class="color-2"><span>9:05 - 9:15</span></li>
                                                    <li class="color-3"><span>9:15 - 9:30</span></li>
                                                    <li class="color-4"><span>9:30 - 10:00</span></li>
                                                    <li class="color-5"><span>10:00 - 11:30</span></li>
                                                    <li class="color-3"><span>11:30 - 11:35</span></li>
                                                    <li class="color-7"><span>11:35 - 12:05</span></li>
                                                    <li class="color-3"><span>12:05 - 12:15</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="member stephen">
                                            <div class="button">
                                                <span class="btn-large bg-1">Moderator of Seminar</span>
                                            </div>
                                            <h4>Opening Remarks</h4>
                                            <p>Opening words, agenda review, and house rules.</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-2">SEM. The Minister of MENI</span>
                                            </div>
                                            <h4>Opening Speech</h4>
                                            <p>Context setting and results expectation.</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-3">ANSIE’s Director</span>
                                            </div>
                                            <h4>ICT policies and regulations in Djibouti.</h4>
                                            <p>Current achievements and situation overview.</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-4">eGA Expert </span>
                                            </div>
                                            <h4>Interoperability: why, what and how.</h4>
                                            <p>Defining the necessity of interoperability.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-5">Guest Speakers</span>
                                            </div>
                                            <h4>Discussion Panel: Interoperability related challenges and situation in Djibouti.</h4>
                                            <p>Interoperability challenges faced by the institutions and how those are currently handled.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3"> ANSIE’s Director</span>
                                            </div>
                                            <h4>Djibouti’s Interoperability Framework.</h4>
                                            <p>Journey and current DIF status.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-7"> ANSIE’s Expert</span>
                                            </div>
                                            <h4>Elements of Djibouti’s Interoperability Framework:</h4>
                                            <p>Overview of DIF: principles, layer, conceptual model, and architecture.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3"> ANSIE’s Director</span>
                                            </div>
                                            <h4>From Draft to Approved DIF</h4>
                                            <p>What will be the steps for approval.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane" id="day2">
                            <div class="row">
                                <div class="col-md-12 board text-center">
                                    <div class="column-1 col-md-3 col-sm-5">
                                        <ul class="nav nav-pills event-time-list">
                                            <li><span>Time</span>
                                                <ul>
                                                    <li class="color-9"><span>13:45 - 14:30</span></li>
                                                    <li class="color-10"><span>14:30 - 15:15</span></li>
                                                    <li class="color-8"><span>15:15 - 16:16</span></li>
                                                    <li class="color-3"><span>16:16 - 16:30</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-9">Team Work</span>
                                            </div>
                                            <h4>Interoperability Principles</h4>
                                            <p>Each group will get a set of principles to identify its relevance for Djibouti and their respective domains.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-10">Team Work</span>
                                            </div>
                                            <h4>Implementation of principles</h4>
                                            <p>Each group must describe how principles are implemented and present its output.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-1">Team Work</span>
                                            </div>
                                            <h4>Responsibilities</h4>
                                            <p>Discuss the responsibilities of each organization regarding the implementation of interoperability and the responsibilities of ANSIE as the coordinator.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3">ANSIE’s Director</span>
                                            </div>
                                            <h4>Next steps</h4>
                                            <p>Take-aways for participants and closing remarks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

</div>
<!-- Main contetn End -->

<!-- Copytight Start -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text text-center">
                    ©Developed by
                        ANSIE
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Copytight End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
</a>



<!-- jQuery Load -->
<script src="{{ asset('template/assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('template/assets/js/bootstrap.min.js')}}"></script>
<!-- Countdown Js -->
<script src="{{ asset('template/assets/js/jquery.countdown.min.js')}}"></script>
<!-- Smooth scroll JS -->
<script src="{{ asset('template/assets/js/smooth-scroll.js')}}"></script>
<!-- Wow Scroll -->
<script src="{{ asset('template/assets/js/wow.js')}}"></script>
<!-- Owl carousel -->
<script src="{{ asset('template/assets/js/owl.carousel.min.js')}}"></script>
<!-- Slicknav js -->
<script src="{{ asset('template/assets/js/jquery.slicknav.js')}}"></script>
<!--  Nivo lightbox Js -->
<script src="{{ asset('template/assets/js/nivo-lightbox.js')}}"></script>
<!-- Contact Form Scripts -->
<script src="{{ asset('template/assets/js/form-validator.min.js')}}"></script>
<script src="{{ asset('template/assets/js/contact-form-script.js')}}"></script>

<!-- All Js plugin -->
<script src="{{ asset('template/assets/js/mainEn.js')}}"></script>
<!-- Map JS -->
<script type="text/javascript" src="{{ asset('template/assets/js/jquery.mapit.min.js')}}"></script>
<script src="{{ asset('template/assets/js/initializers.js')}}"></script>
<script src="{{ asset('template/assets/js/countdown.js')}}"></script>

<script>
    $(document).ready(function () {
        
        $('.selectpicker').on('change', function() {
            if($('.selectpicker').val()=="en"){
                window.location.replace("<?php echo URL::to('event/en'); ?>");
            } 
            else if($('.selectpicker').val()=="fr"){
                window.location = "<?php  echo URL::to('event/fr'); ?>";
            }
        });
    }); 
      
</script>
<script src="{{ asset('js/particles/app.js') }}"></script>
<script src="{{ asset('js/particles/particles.js') }}"></script>
<script src="{{ asset('js/particles/particles.min.js') }}"></script>
</body>
</html>
