<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>Not Authorized</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('template/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!--C3.JS CHARTS PLUGIN -->
		<link href="{{asset('template/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('template/assets/colors/color1.css')}}" />

	</head>

	<body class="error-bg">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('template/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- End GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
		   <!-- PAGE-CONTENT OPEN -->
			<div class="page-content error-page error2">
				<div class="container text-center">
					<div class="error-template">
						<h1 class="display-1 text-dark mb-2">401<span class="fs-20">error</span></h1>
						<h5 class="error-details text-dark">
							Desole, Vous etes pas autoriser à acceder a cette page!
						</h5>
						<div class="text-center">
							<a class="btn btn-primary mt-5 mb-5" href="{{url('/')}}"> <i class="fa fa-long-arrow-left"></i> Retour à l'Acceuil </a>
						</div>
                    </div>
				</div>
			</div>
			<!-- PAGE-CONTENT OPEN CLOSED -->
		</div>
		<!-- End PAGE -->

		<!-- JQUERY JS -->
		<script src="{{asset('template/assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE -->
		<script src="{{asset('template/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE -->
		<script src="{{asset('template/assets/js/circle-progress.min.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

		<!-- INPUT MASK PLUGIN-->
		<script src="{{asset('template/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('template/assets/js/custom.js')}}"></script>

	</body>
</html>