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
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets1/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>Liste des participants</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('template/assets1/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('template/assets1/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets1/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets1/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="{{asset('template/assets1/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">

		<!--C3 CHARTS CSS -->
		<link href="{{asset('template/assets1/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('template/assets1/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- DATA TABLE CSS -->
		<link href="{{asset('template/assets1/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('template/assets1/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('template/assets1/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="{{asset('template/assets1/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{asset('template/assets1/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('template/assets1/css/icons.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{asset('template/assets1/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('template/assets1/colors/color1.css')}}" />

	</head>

	<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('template/assets1/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.html">
							<img src="{{asset('template/assets1/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{asset('template/assets1/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
							<img src="{{asset('template/assets1/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
							<img src="{{asset('template/assets1/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Liste</span></a>
						</li>
					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand1 d-flex d-md-none" href="index.html">
								<img src="{{asset('template/assets1/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset('template/assets1/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
								<img src="{{asset('template/assets1/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
								<img src="{{asset('template/assets1/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
							</a><!-- LOGO -->
							<div class="main-header-center ms-3 d-none d-md-block">
								<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<div class="dropdown d-lg-none d-md-block d-none">
									<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="input-group-text btn btn-primary">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div><!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
								</button>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon theme-layout nav-link-bg layout-setting">
										<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
										<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
									</a>
								</div><!-- Theme-Layout -->
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								

								<div class="dropdown d-none d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-menu"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ms-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-start">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control" placeholder="Search....">
										<div class="input-group-text btn btn-primary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon theme-layout nav-link-bg layout-setting">
									<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
									<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
								</a>
							</div><!-- Theme-Layout -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->

							<div class="dropdown d-md-flex header-settings">
								<a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="fe fe-menu"></i>
								</a>
							</div><!-- SIDE-MENU -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Liste</h1>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Liste des participants</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive export-table">
											<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
												<thead>
													<tr>
														<th class="border-bottom-0">Nom</th>
														<th class="border-bottom-0">Email</th>
														<th class="border-bottom-0">Téléphone</th>
														<th class="border-bottom-0">nb cooequipier</th>
													
														<th class="border-bottom-0">status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($lists as $list)
														<tr>
															<td>{{ $list->nom }}</td>
															<td>{{ $list->mail }}</td>
															<td>{{ $list->tel }}</td>
															<td>{{ $list->nb_groupe }}</td>
															
															<td></td>
															<td> <a href="{{url("/masquer/$list->id")}}">Traiter</a> </td>
														</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

			<!-- Sidebar-right -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 shadow-none border-0">
					<div class="tab-menu-heading border-0 d-flex p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu border-bottom">
							<!-- Tabs -->
							
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="side1">
								<div class="card-body text-center">
									<div class="dropdown user-pro-body">
										<div class="">
											<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{asset('template/assets1/images/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
										</div>
										<div class="user-info mg-t-20">
											<h6 class="fw-semibold  mt-2 mb-0">{{ Auth::user()->name }}</h6>
											<span class="mb-0 text-muted fs-12">Administrateur</span>
										</div>
									</div>
								</div>
								
								
								
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
        
                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            Déconnexion 
                                        </x-jet-dropdown-link>
                                    </form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- FOOTER -->
			
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('template/assets1/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('template/assets1/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('template/assets1/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="{{asset('template/assets1/js/circle-progress.min.js')}}"></script>

		<!-- C3 CHART JS -->
		<script src="{{asset('template/assets1/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('template/assets1/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- SIDE-MENU JS -->
		<script src="{{asset('template/assets1/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('template/assets1/plugins/select2/select2.full.min.js')}}"></script>

		<!-- DATA TABLE JS-->
		<script src="{{asset('template/assets1/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets1/js/table-data.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('template/assets1/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('template/assets1/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/p-scroll/pscroll.js')}}"></script>
		<script src="{{asset('template/assets1/plugins/p-scroll/pscroll-1.js')}}')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('template/assets1/js/custom.js')}}"></script>

	</body>
</html>