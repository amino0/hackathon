<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evenement - Hackathon</title>
    <link rel="stylesheet" href="{{ asset('template/assets1/style.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/bootstrap.min.css')}}" >
    <!-- Main Style -->
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
<!-- partial:index.partial.html
<div id="particles-js')}}">

</div> -->


<!--Header
    -->
    <div id="divLang">
        Langage :
        <select class="selectpicker" data-width="fit">
            <option value="fr">
                Fr
            </option>
            <option value="en">
               En
            </option>
        </select> 
    </div>

<!-- Call to action Section End -->
<section class="countdown-timer section">
    <div id="particles-js"></div>
    <center>
        <img src="{{ asset('template/assets1/images/pnglogo-ansie.png') }}" class="img-responsive" height="150px" width="auto" style="max-width: 270px" alt="logo-ansie">
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="text">
                    <h2>Hackathon <br/>Djiboutien</h2>
                    <h4>Djibouti Palace Kempinski <br> 05 FEB 2022</h4>
                    <a href="{{ url('/registration') }}" class="btn btn-lg btn-common">Inscription</a>
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
                <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">Pourquoi adh??rer ?</h2>
                <p class="section-subcontent wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                    L'interop??rabilit?? est ?? la fois une condition pr??alable et un facilitateur de la prestation efficace de services publics. Le cadre d'interop??rabilit?? vise ?? am??liorer :
                </p>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/handshake.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>Coop??ration interminist??rielle</h4>
                            <p>
                                la coop??ration entre les structures de l???administration publique en vue de mettre en place de meilleurs services rendus ?? ses usagers.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/statistics.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>Efficacit?? administrative</h4>
                            <p>
                                le partage et la r??utilisation des informations entre les structures de l???administration publique, pour accro??tre l???efficacit?? administrative et r??duire la lourdeur administrative pour les citoyens et les entreprises.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="featured-box wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <div class="icon-images">
                            <img src="{{ asset('template/assets/images/data-transfer.png')}}" alt="" style="">
                        </div>
                        <div class="featured-content">
                            <h4>??change d'informations</h4>
                            <p>
                                l'??change d'informations entre les acteurs de l???administration publique pour r??pondre aux exigences l??gales ou aux engagements politiques.                            </p>
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
                <h2 class="section-title wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">Agenda</h2>
              
                <div class="main-board wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">

                    <ul class="nav nav-tabs day" role="tablist">
                        <li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">04 OCT<br> <span>Matin</span></a></li>
                        <li role="presentation" ><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">04 OCT<br> <span>Apr??s-midi</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="day1">
                            <div class="row">
                                <div class="col-md-12 board text-center">
                                    <div class="column-1 col-md-3 col-sm-5">
                                        <ul class="nav nav-pills event-time-list">
                                            <li><span>Heure</span>
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
                                                <span class="btn-large bg-1">Mod??rateur de s??minaire</span>
                                            </div>
                                            <h4>Mot de bienvenue</h4>
                                            <p>Accueil, ordre du jour.</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-2">SEM. la Ministre du MENI</span>
                                            </div>
                                            <h4>Discours d'ouverture</h4>
                                            <p>Contexte et r??sultats attendus</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-3">Directeur de l'ANSIE</span>
                                            </div>
                                            <h4>Politiques et r??glementations des TIC ?? Djibouti.</h4>
                                            <p>R??alisations actuelles et ??tat des lieux.</p>
                                        </div>
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-4">Expert de l'eGA</span>
                                            </div>
                                            <h4>Interop??rabilit?? : pourquoi, quoi et comment.</h4>
                                            <p>D??finir la n??cessit?? de l'interop??rabilit??.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="member jeson">
                                            <div class="button">
                                                <span class="btn-large bg-5">Invit??s d'honneur</span>
                                            </div>
                                            <h4>Panel de discussion : d??fis et condition li??s ?? l'interop??rabilit?? ?? Djibouti.</h4>
                                            <p>Des ??changes sur les d??fis d'interop??rabilit?? rencontr??s par les institutions et leurs traitements.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3">Directeur de l'ANSIE</span>
                                            </div>
                                            <h4>Introduction du Cadre d'Interop??rabilit?? de Djibouti (CID).</h4>
                                            <p>Parcours et ??tat actuel du CID</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-7">Expert de l'ANSIE</span>
                                            </div>
                                            <h4>Aper??u g??n??rale des ??l??ments du CID :</h4>
                                            <p>Pr??sentation du CID : principes, niveaux, mod??le conceptuel et architecture.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3">Directeur de l'ANSIE</span>
                                            </div>
                                            <h4>Le CID du draft ?? la validation</h4>
                                            <p>Quelles seront les ??tapes de validation.</p>
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
                                            <li><span>Heure</span>
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
                                                <span class="btn-large bg-9">Travail en ??quipe</span>
                                            </div>
                                            <h4>Principes d'interop??rabilit??</h4>
                                            <p>Chaque groupe recevra un ensemble de principes pour identifier sa pertinence pour Djibouti et leurs domaines respectifs.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-10">Travail en ??quipe</span>
                                            </div>
                                            <h4>Mise en ??uvre des principes</h4>
                                            <p>Chaque groupe doit d??crire comment les principes sont mis en ??uvre et pr??senter ses r??sultats.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-1">Travail en ??quipe</span>
                                            </div>
                                            <h4>Responsabilit??s</h4>
                                            <p>Discuter des responsabilit??s de chaque organisation concernant la mise en ??uvre de l'interop??rabilit?? et des responsabilit??s de l'ANSIE en tant que coordinateur.</p>
                                        </div>
                                        <div class="member jon">
                                            <div class="button">
                                                <span class="btn-large bg-3">Directeur de l'ANSIE</span>
                                            </div>
                                            <h4>Prochaines ??tapes</h4>
                                            <p>?? retenir pour les participants et remarques de cl??ture.</p>
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
</div>
<!-- Copytight Start -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text text-center">
                    ??D??velopp?? par
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
<script src="{{ asset('template/assets/js/main.js')}}"></script>
<!-- Map JS -->
<script type="text/javascript" src="{{ asset('template/assets/js/jquery.mapit.min.js')}}"></script>
<script src="{{ asset('template/assets/js/initializers.js')}}"></script>
<script src="{{ asset('template/assets/js/countdown.js')}}"></script>
<script src="{{ asset('template/vendor/particlesjs/particles.min.js')}}"></script>


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
