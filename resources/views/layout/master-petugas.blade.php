<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Dinas Perhubungan Jawa Timur</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/admin/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/admin/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/admin/fonts/style.css">
		<link rel="stylesheet" href="assets/admin/css/main.css">
		<link rel="stylesheet" href="assets/admin/css/main-responsive.css">
		<link rel="stylesheet" href="assets/admin/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/admin/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/admin/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/admin/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/admin/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<style>
			.label-success {
				background: #EDFCF6;
				border: 1px solid #B1E5CC;
				border-radius: 6px;
				color: #2D8057
			}
			
			.label-danger {
				background: #FFF3F2;
				border: 1px solid #F2C6C4;
				border-radius: 6px;
				color: #CC413D;
			}

			.label-warning {
				background: #FFF7F0;
				border: 1px solid #E5D2B1;
				border-radius: 6px;
				color: #A3550B;
			}

			.label-info {
				background: #F0F5FF;
				border: 1px solid #BBCBF2;
				border-radius: 6px;
				color: #416BCC;
			}

			.label-primary {
				background: #F2F2FF;
				border: 1px solid #C3C4F3;
				border-radius: 6px;
				color: #4C4DDC;
			}

		</style>
		@stack('style')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="index.html">
						CLIP<i class="clip-clip"></i>ONE
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="assets/admin/images/avatar-1-small.jpg" class="circle-img" alt="">
								<span class="username">Peter Clark</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="pages_user_profile.html">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li>
								<li>
									<a href="pages_calendar.html">
										<i class="clip-calendar"></i>
										&nbsp;My Calendar
									</a>
								<li>
									<a href="pages_messages.html">
										<i class="clip-bubble-4"></i>
										&nbsp;My Messages (3)
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="utility_lock_screen.html"><i class="clip-locked"></i>
										&nbsp;Lock Screen </a>
								</li>
								<li>
									<a href="login_example1.html">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li class="{{ Request::segment(1) === 'dashboard-petugas' ? 'active' : '' }}">
							<a href="/dashboard-petugas"><i class="clip-home-3"></i>
								<span class="title"> Dashboard </span><span class="selected"></span>
							</a>
						</li>
						<li class="{{ Request::segment(1) === 'perusahaan-petugas' ? 'active' : '' }}">
							<a href="/perusahaan-petugas"><i class="clip-screen"></i>
								<span class="title"> Perusahaan </span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="{{ Request::segment(1) === 'kendaraan-pemohon' ? 'active' : '' }}">
							<a href="/kendaraan-petugas"><i class="clip-cursor"></i>
								<span class="title"> kendaraan </span><span class="selected"></span>
							</a>
						</li>
						
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
            @yield('content')
        </div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; clip-one by cliptheme.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Event Management</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-light-grey">
							Close
						</button>
						<button type="button" class="btn btn-danger remove-event no-display">
							<i class='fa fa-trash-o'></i> Delete Event
						</button>
						<button type='submit' class='btn btn-success save-event'>
							<i class='fa fa-check'></i> Save
						</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/admin/plugins/respond.min.js"></script>
		<script src="assets/admin/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/admin/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/admin/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/admin/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/admin/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/admin/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/admin/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/admin/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		@stack('script')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
			
	</body>
	<!-- end: BODY -->
</html>