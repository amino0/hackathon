<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription à l'atelier de discussion et validation du cadre d'interopérabilité de Djibouti</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('template/assets1/style.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<div id="particles-js"></div>
<!-- MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form id="msform" action="{{url('/registration')}}" method="POST" novalidate enctype="multipart/form-data">
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="fieldiv">
                    <img src="{{ asset('template/assets1/images/pnglogo-ansie.png') }}" alt="logo-ansie">
                    <!-- fieldsets -->
                    <fieldset data-step="1">

                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        @endif

                        <h2 class="fs-title">Veuillez saisir votre Nom Complet</h2>
                        <!--<p class="help-block">List your strengths here.</p>-->
                        <div>
                            <input class="form-control" name="CAT_Custom_1" id="CAT_Custom_1" type="text"
                            placeholder="" value="{{ old('CAT_Custom_1') }}" required/>
                        </div>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="2">
                        <h2 class="fs-title">Veuillez saisir votre email</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_2" id="CAT_Custom_2" type="email"
                               placeholder="" value="{{ old('CAT_Custom_2') }}" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="3">

                        <h2 class="fs-title">Veuillez saisir votre numéro de téléphone</h2>
                        <div>
                            <input class="form-control" name="CAT_Custom_3" id="CAT_Custom_3" type="number"
                               placeholder="+253 " value="{{ old('CAT_Custom_3') }}" required/>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="4">

                        <h2 class="fs-title">Combien de cooequiper avez vous ? </h2>
                        <div>
                            <select class="form-select" aria-label="Default select example" name="CAT_Custom_4" id="CAT_Custom_4"  required>
                                <option value="0">Personne, je suis seul.</option>
                                <option value="1">1 personne</option>
                                <option value="2">2 personnes</option>
                              </select>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="5">

                        <h2 class="fs-title">Veuillez listé les noms, mails et numero de telephone des cooequipers</h2>
                        <div>
                            <input class="form-check-input" name="CAT_Custom_5" type="checkbox" value="CHECK" id="CAT_Custom_5"><b>Si vous etes seul</b> 

                          <p>Premier participant</p>
                          <input class="form-control" name="PAT_1_nom"  type="text"
                               placeholder="le nom complet"  />
                         <input class="form-control" name="PAT_1_num"  type="number"
                               placeholder="+253 "  />
                         <input class="form-control" name="PAT_1_mail"  type="mail"
                               placeholder="le mail "  />
                               <p>Deuxieme participant</p>
                               <input class="form-control" name="PAT_2_nom"  type="text"
                                    placeholder="le nom complet" value="{{ old('CAT_Custom_5') }}" />
                              <input class="form-control" name="PAT_2_num"  type="number"
                                    placeholder="+253 "  />
                              <input class="form-control" name="PAT_2_mail"  type="mail"
                                    placeholder="le mail "  />
                           

                            <p>Veuillez cochez si vous etes seul.</p>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset data-step="6">

                        <h2 class="fs-title">Veuillez envoyer les CVs de tout les participants ?</h2>
                        
                        <input style="

                        @charset "UTF-8";
                        @font-face {
                          font-family: 'dropify';
                          src: url("../fonts/dropify.eot");
                          src: url("../fonts/dropify.eot#iefix") format("embedded-opentype"), url("../fonts/dropify.woff") format("woff"), url("../fonts/dropify.ttf") format("truetype"), url("../fonts/dropify.svg#dropify") format("svg");
                          font-weight: normal;
                          font-style: normal; }
                        
                        [class^="dropify-font-"]:before, [class*=" dropify-font-"]:before, .dropify-font:before, .dropify-wrapper .dropify-message span.file-icon:before {
                          font-family: "dropify";
                          font-style: normal;
                          font-weight: normal;
                          speak: none;
                          display: inline-block;
                          text-decoration: inherit;
                          width: 1em;
                          margin-left: .2em;
                          margin-right: .2em;
                          text-align: center;
                          font-variant: normal;
                          text-transform: none;
                          line-height: 1em; }
                        
                        .dropify-font-upload:before, .dropify-wrapper .dropify-message span.file-icon:before {
                          content: '\e800'; }
                        
                        .dropify-font-file:before {
                          content: '\e801'; }
                        
                        .dropify-wrapper {
                          display: block;
                          position: relative;
                          cursor: pointer;
                          overflow: hidden;
                          width: 100%;
                          max-width: 100%;
                          height: 200px;
                          padding: 5px 10px;
                          font-size: 14px;
                          line-height: 22px;
                          color: #000;
                          background-color: #FFF;
                          background-image: none;
                          text-align: center;
                          border: 1px solid #f0f0f4;
                          -webkit-transition: border-color 0.15s linear;
                          transition: border-color 0.15s linear; }
                          .dropify-wrapper:hover {
                            background-size: 30px 30px;
                            background-image: -webkit-linear-gradient(135deg, #F6F6F6 25%, transparent 25%, transparent 50%, #F6F6F6 50%, #F6F6F6 75%, transparent 75%, transparent);
                            background-image: linear-gradient(-45deg, #F6F6F6 25%, transparent 25%, transparent 50%, #F6F6F6 50%, #F6F6F6 75%, transparent 75%, transparent);
                            -webkit-animation: stripes 2s linear infinite;
                                    animation: stripes 2s linear infinite; }
                          .dropify-wrapper.has-preview .dropify-clear {
                            display: block; }
                          .dropify-wrapper.has-error {
                            border-color: #F34141; }
                            .dropify-wrapper.has-error .dropify-message .dropify-error {
                              display: block; }
                            .dropify-wrapper.has-error:hover .dropify-errors-containerÂ  {
                              visibility: visible;
                              opacity: 1;
                              -webkit-transition-delay: 0s;
                                      transition-delay: 0s; }
                          .dropify-wrapper.disabled input {
                            cursor: not-allowed; }
                          .dropify-wrapper.disabled:hover {
                            background-image: none;
                            -webkit-animation: none;
                                    animation: none; }
                          .dropify-wrapper.disabled .dropify-message {
                            opacity: 0.5;
                            text-decoration: line-through; }
                          .dropify-wrapper.disabled .dropify-infos-message {
                            display: none; }
                          .dropify-wrapper input {
                            position: absolute;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            height: 100%;
                            width: 100%;
                            opacity: 0;
                            cursor: pointer;
                            z-index: 5; }
                          .dropify-wrapper .dropify-message {
                            position: relative;
                            top: 50%;
                            -webkit-transform: translateY(-50%);
                                    transform: translateY(-50%); }
                            .dropify-wrapper .dropify-message span.file-icon {
                              font-size: 50px;
                              color: #68798b; }
                            .dropify-wrapper .dropify-message p {
                              margin: 5px 0 0 0;
                              font-size: 14px;}
                              .dropify-wrapper .dropify-message p.dropify-error {
                                color: #F34141;
                                font-weight: bold;
                                display: none; }
                          .dropify-wrapper .dropify-clear {
                            display: none;
                            position: absolute;
                            opacity: 0;
                            z-index: 7;
                            top: 10px;
                            right: 10px;
                            background: none;
                            border: 2px solid #FFF;
                            text-transform: uppercase;
                            font-family: "Roboto", "Helvetica Neue", "Helvetica", "Arial";
                            font-size: 11px;
                            padding: 4px 8px;
                            font-weight: bold;
                            color: #FFF;
                            -webkit-transition: all 0.15s linear;
                            transition: all 0.15s linear; }
                            .dropify-wrapper .dropify-clear:hover {
                              background: rgba(255, 255, 255, 0.2); }
                          .dropify-wrapper .dropify-preview {
                            display: none;
                            position: absolute;
                            z-index: 1;
                            background-color: #FFF;
                            padding: 5px;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            overflow: hidden;
                            text-align: center; }
                            .dropify-wrapper .dropify-preview .dropify-render img {
                              top: 50%;
                              -webkit-transform: translate(0, -50%);
                                      transform: translate(0, -50%);
                              position: relative;
                              max-width: 100%;
                              max-height: 100%;
                              background-color: #FFF;
                              -webkit-transition: border-color 0.15s linear;
                              transition: border-color 0.15s linear; }
                            .dropify-wrapper .dropify-preview .dropify-render i {
                              font-size: 70px;
                              top: 50%;
                              left: 50%;
                              -webkit-transform: translate(-50%, -50%);
                                      transform: translate(-50%, -50%);
                              position: absolute;
                              color: #777; }
                            .dropify-wrapper .dropify-preview .dropify-render .dropify-extension {
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              -webkit-transform: translate(-50%, -50%);
                                      transform: translate(-50%, -50%);
                              margin-top: 10px;
                              text-transform: uppercase;
                              font-weight: 900;
                              letter-spacing: -0.03em;
                              font-size: 13px;
                              width: 42px;
                              white-space: nowrap;
                              overflow: hidden;
                              text-overflow: ellipsis; }
                            .dropify-wrapper .dropify-preview .dropify-infos {
                              position: absolute;
                              left: 0;
                              top: 0;
                              right: 0;
                              bottom: 0;
                              z-index: 3;
                              background: rgba(0, 0, 0, 0.7);
                              opacity: 0;
                              -webkit-transition: opacity 0.15s linear;
                              transition: opacity 0.15s linear; }
                              .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner {
                                position: absolute;
                                top: 50%;
                                -webkit-transform: translate(0, -40%);
                                        transform: translate(0, -40%);
                                -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                width: 100%;
                                padding: 0 20px;
                                -webkit-transition: all 0.2s ease;
                                transition: all 0.2s ease; }
                                .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner p {
                                  padding: 0;
                                  margin: 0;
                                  position: relative;
                                  width: 100%;
                                  white-space: nowrap;
                                  overflow: hidden;
                                  text-overflow: ellipsis;
                                  color: #FFF;
                                  text-align: center;
                                  line-height: 25px;
                                  font-weight: bold; }
                                  .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner p.dropify-infos-message {
                                    margin-top: 15px;
                                    padding-top: 15px;
                                    font-size: 12px;
                                    position: relative;
                                    opacity: 0.5; }
                                    .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner p.dropify-infos-message::before {
                                      content: '';
                                      position: absolute;
                                      top: 0;
                                      left: 50%;
                                      -webkit-transform: translate(-50%, 0);
                                              transform: translate(-50%, 0);
                                      background: #FFF;
                                      width: 30px;
                                      height: 2px; }
                          .dropify-wrapper:hover .dropify-clear {
                            opacity: 1; }
                          .dropify-wrapper:hover .dropify-preview .dropify-infos {
                            opacity: 1; }
                            .dropify-wrapper:hover .dropify-preview .dropify-infos .dropify-infos-inner {
                              margin-top: -5px; }
                          .dropify-wrapper.touch-fallback {
                            height: auto !important; }
                            .dropify-wrapper.touch-fallback:hover {
                              background-image: none;
                              -webkit-animation: none;
                                      animation: none; }
                            .dropify-wrapper.touch-fallback .dropify-preview {
                              position: relative;
                              padding: 0; }
                              .dropify-wrapper.touch-fallback .dropify-preview .dropify-render {
                                display: block;
                                position: relative; }
                                .dropify-wrapper.touch-fallback .dropify-preview .dropify-render .dropify-font-file {
                                  position: relative;
                                  -webkit-transform: translate(0, 0);
                                          transform: translate(0, 0);
                                  top: 0;
                                  left: 0; }
                                  .dropify-wrapper.touch-fallback .dropify-preview .dropify-render .dropify-font-file::before {
                                    margin-top: 30px;
                                    margin-bottom: 30px; }
                                .dropify-wrapper.touch-fallback .dropify-preview .dropify-render img {
                                  position: relative;
                                  -webkit-transform: translate(0, 0);
                                          transform: translate(0, 0); }
                              .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos {
                                position: relative;
                                opacity: 1;
                                background: transparent; }
                                .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos .dropify-infos-inner {
                                  position: relative;
                                  top: 0;
                                  -webkit-transform: translate(0, 0);
                                          transform: translate(0, 0);
                                  padding: 5px 90px 5px 0; }
                                  .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos .dropify-infos-inner p {
                                    padding: 0;
                                    margin: 0;
                                    position: relative;
                                    width: 100%;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    color: #777;
                                    text-align: left;
                                    line-height: 25px; }
                                    .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos .dropify-infos-inner p.dropify-filename {
                                      font-weight: bold; }
                                    .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos .dropify-infos-inner p.dropify-infos-message {
                                      margin-top: 0;
                                      padding-top: 0;
                                      font-size: 11px;
                                      position: relative;
                                      opacity: 1; }
                                      .dropify-wrapper.touch-fallback .dropify-preview .dropify-infos .dropify-infos-inner p.dropify-infos-message::before {
                                        display: none; }
                            .dropify-wrapper.touch-fallback .dropify-message {
                              -webkit-transform: translate(0, 0);
                                      transform: translate(0, 0);
                              padding: 40px 0; }
                            .dropify-wrapper.touch-fallback .dropify-clear {
                              top: auto;
                              bottom: 23px;
                              opacity: 1;
                              border-color: rgba(119, 119, 119, 0.7);
                              color: #777; }
                            .dropify-wrapper.touch-fallback.has-preview .dropify-message {
                              display: none; }
                            .dropify-wrapper.touch-fallback:hover .dropify-preview .dropify-infos .dropify-infos-inner {
                              margin-top: 0; }
                          .dropify-wrapper .dropify-loader {
                            position: absolute;
                            top: 15px;
                            right: 15px;
                            display: none;
                            z-index: 9; }
                            .dropify-wrapper .dropify-loader::after {
                              display: block;
                              position: relative;
                              width: 20px;
                              height: 20px;
                              -webkit-animation: rotate 0.6s linear infinite;
                                      animation: rotate 0.6s linear infinite;
                              border-radius: 100%;
                              border-top: 1px solid #CCC;
                              border-bottom: 1px solid #777;
                              border-left: 1px solid #CCC;
                              border-right: 1px solid #777;
                              content: ''; }
                          .dropify-wrapper .dropify-errors-container {
                            position: absolute;
                            left: 0;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            z-index: 3;
                            background: rgba(243, 65, 65, 0.8);
                            text-align: left;
                            visibility: hidden;
                            opacity: 0;
                            -webkit-transition: visibility 0s linear 0.15s,opacity 0.15s linear;
                            transition: visibility 0s linear 0.15s,opacity 0.15s linear; }
                            .dropify-wrapper .dropify-errors-container ul {
                              padding: 10px 20px;
                              margin: 0;
                              position: absolute;
                              left: 0;
                              top: 50%;
                              -webkit-transform: translateY(-50%);
                                      transform: translateY(-50%); }
                              .dropify-wrapper .dropify-errors-container ul li {
                                margin-left: 20px;
                                color: #FFF;
                                font-weight: bold; }
                            .dropify-wrapper .dropify-errors-container.visible {
                              visibility: visible;
                              opacity: 1;
                              -webkit-transition-delay: 0s;
                                      transition-delay: 0s; }
                          .dropify-wrapper ~ .dropify-errors-container ul {
                            padding: 0;
                            margin: 15px 0; }
                            .dropify-wrapper ~ .dropify-errors-container ul li {
                              margin-left: 20px;
                              color: #F34141;
                              font-weight: bold; }
                        
                        @-webkit-keyframes stripes {
                          from {
                            background-position: 0 0; }
                          to {
                            background-position: 60px 30px; } }
                        
                        @keyframes stripes {
                          from {
                            background-position: 0 0; }
                          to {
                            background-position: 60px 30px; } }
                        
                        @-webkit-keyframes rotate {
                          0% {
                            -webkit-transform: rotateZ(-360deg);
                                    transform: rotateZ(-360deg); }
                          100% {
                            -webkit-transform: rotateZ(0deg);
                                    transform: rotateZ(0deg); } }
                        
                        @keyframes rotate {
                          0% {
                            -webkit-transform: rotateZ(-360deg);
                                    transform: rotateZ(-360deg); }
                          100% {
                            -webkit-transform: rotateZ(0deg);
                                    transform: rotateZ(0deg); } }
                         
                        " type="file"  name="CAT_Custom_6" id="CAT_Custom_6" class="dropify" data-bs-height="180" required>
                        <p>Nous vous répondrons par email.</p>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="button" name="suivant" class="next action-button" value="Suivant"/>
                    </fieldset>
                    
                    <fieldset>

                        <h2 class="fs-title">
                            Veuillez cliquer sur Enregistré pour confirmer. <br><br> Merci et nous vous enverrons un email de confirmation.</h2>
                        <div class="success-checkmark">
                            <div class="check-icon">
                                <span class="icon-line line-tip"></span>
                                <span class="icon-line line-long"></span>
                                <div class="icon-circle"></div>
                                <div class="icon-fix"></div>
                            </div>
                        </div>
                        <input type="button" name="précédent" class="previous action-button" value="Précédent"/>
                        <input type="submit" name="submit" id="submit" class="submit action-button" value="Enregistré"/>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="{{ asset('template/assets1/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA==" crossorigin="anonymous"></script>
<script src="{{ asset('js/particles/app.js') }}"></script>
<script src="{{ asset('js/particles/particles.js') }}"></script>
<script src="{{ asset('js/particles/particles.min.js') }}"></script>
<script>
    jQuery.extend(jQuery.validator.messages, {
        required: "Ce champ est requis.",
        email: "Veuillez entrer une adresse e-mail valide.",
    });
</script>
</body>
</html>