<?php
	require "session.php";
	
	$user = $_SESSION['email'];

//	print_r($assoc_array);
	$u_id = $assoc_array['id'];
	$p = $_SESSION["user_id"] = $u_id;


//			if($stmt = $conn->prepare("SELECT * FROM enroll_course WHERE id=?")){
//				$stmt -> bind_param('i', $u_id);
//    			$stmt->execute();
//    			$stmt->store_result();
//				$assoc_array = fetchAssocStatement($stmt);
////				print_r($assoc_array);
//				
//				$u_id = $assoc_array['id'];
//				$co_id = $assoc_array['c_id'];
//				
//				$p = $_SESSION["user_id"] = $u_id;
////				$q = $_SESSION["course_id"] = $c_id;
//				
//				
//			}


?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ela Admin - HTML5 Admin Template</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/courses.css">
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

</head>

<body>
	<!-- Left Panel -->
	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">
			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
					</li>
					<li class="menu-title">UI elements</li><!-- /.menu-title -->
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
							<li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
							<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

							<li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
							<li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
							<li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
							<li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
							<li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
							<li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
							<li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
							<li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
						</ul>
					</li>

					<li class="menu-title">Icons</li><!-- /.menu-title -->

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
							<li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
							<li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
							<li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
						</ul>
					</li>
					<li class="menu-title">Extras</li><!-- /.menu-title -->
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
							<li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
							<li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside>
	<!-- /#left-panel -->
	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">
		<!-- Header-->
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
<!--					<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>-->
<!--					<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>-->
					<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<div class="top-right">
				<div class="header-menu">
					<div class="header-left">
						<button class="search-trigger"><i class="fa fa-search"></i></button>
						<div class="form-inline">
							<form class="search-form">
								<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
								<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
							</form>
						</div>

						<div class="dropdown for-notification">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="count bg-danger">3</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="notification">
								<p class="red">You have 3 Notification</p>
								<a class="dropdown-item media" href="#">
									<i class="fa fa-check"></i>
									<p>Server #1 overloaded.</p>
								</a>
								<a class="dropdown-item media" href="#">
									<i class="fa fa-info"></i>
									<p>Server #2 overloaded.</p>
								</a>
								<a class="dropdown-item media" href="#">
									<i class="fa fa-warning"></i>
									<p>Server #3 overloaded.</p>
								</a>
							</div>
						</div>

						<div class="dropdown for-message">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
								<span class="count bg-primary">4</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="message">
								<p class="red">You have 4 Mails</p>
								<a class="dropdown-item media" href="#">
									<span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Jonathan Smith</span>
										<span class="time float-right">Just now</span>
										<p>Hello, this is an example msg</p>
									</div>
								</a>
								<a class="dropdown-item media" href="#">
									<span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Jack Sanders</span>
										<span class="time float-right">5 minutes ago</span>
										<p>Lorem ipsum dolor sit amet, consectetur</p>
									</div>
								</a>
								<a class="dropdown-item media" href="#">
									<span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Cheryl Wheeler</span>
										<span class="time float-right">10 minutes ago</span>
										<p>Hello, this is an example msg</p>
									</div>
								</a>
								<a class="dropdown-item media" href="#">
									<span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Rachel Santos</span>
										<span class="time float-right">15 minutes ago</span>
										<p>Lorem ipsum dolor sit amet, consectetur</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
						</a>

						<div class="user-menu dropdown-menu">

							<a class="nav-link" href="#"><i class="fa fa- user"></i>
								<?= $username;?></a>
							<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

							<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

							<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

							<a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
						</div>
					</div>

				</div>
			</div>
		</header>
		<!-- /#header -->
		<!-- Content -->
		<div class="content">
			<!-- Animated -->
			<div class="animated fadeIn">
				<!-- Widgets  -->
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="stat-widget-five">
									<div class="stat-icon dib flat-color-1">
										<i class="pe-7s-cash"></i>
									</div>
									<div class="stat-content">
										<div class="text-left dib">
											<div class="stat-text">$<span class="count">23569</span></div>
											<div class="stat-heading">Revenue</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="stat-widget-five">
									<div class="stat-icon dib flat-color-2">
										<i class="pe-7s-cart"></i>
									</div>
									<div class="stat-content">
										<div class="text-left dib">
											<div class="stat-text"><span class="count">3435</span></div>
											<div class="stat-heading">Sales</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="stat-widget-five">
									<div class="stat-icon dib flat-color-3">
										<i class="pe-7s-browser"></i>
									</div>
									<div class="stat-content">
										<div class="text-left dib">
											<div class="stat-text"><span class="count">349</span></div>
											<div class="stat-heading">Templates</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="stat-widget-five">
									<div class="stat-icon dib flat-color-4">
										<i class="pe-7s-users"></i>
									</div>
									<div class="stat-content">
										<div class="text-left dib">
											<div class="stat-text"><span class="count">2986</span></div>
											<div class="stat-heading">Clients</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Widgets -->


				<!--				<div class="clearfix"></div>-->




				<div class="row">

					<?php
							$sql = "SELECT `e_id`, `c_id`, `id`, `e_price`, `e_name`, `e_image`, `e_link` FROM `enroll_course` WHERE id = $p order by c_id ASC";
							
							$result = $conn->query($sql); 
		 if ($result->num_rows > 0) {
// output data of each row
		while($row = $result->fetch_assoc()) {
//			print_r($row);
			?>
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="<?php echo $row['e_image']; ?>" alt="Card image cap">
							
							<div class="course_body">
								<h3 class="course_title"><a href="<?php echo "../".$row["e_link"]; ?>">
									
										<?php echo $row['e_name']; ?></a></h3>
										
										
										
<!--										<?php echo $_SESSION["e_link"]; ?>-->
<!--class="text-center" 									-->
<!--									<?php echo "..".$row["e_link"]; ?>-->
									
										
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>




							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>



					<!--
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="images/course_4.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="images/course_5.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--
					<div class="col-md-6">
						<div class="card">
							<img class="card-img-top" src="images/course_8.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--
					<div class="col-md-6">
						<div class="card">
							<img class="card-img-top" src="images/course_3.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--
					<div class="col-md-6">
						<div class="card">
							<img class="card-img-top" src="images/course_5.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<!--
					<div class="col-md-6">
						<div class="card">
							<img class="card-img-top" src="images/course_1.jpg" alt="Card image cap">
							<div class="course_body">
								<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
								<div class="course_teacher">Ms. Lucius</div>
								<div class="course_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
								</div>
							</div>

							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Student</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto">$130</div>
								</div>
							</div>
						</div>
					</div>
-->
					<?php
          	}
	}
?>
				</div><!-- .row  change card body css from course body -->







			</div>
			<!-- .animated -->
		</div>
		<!-- /.content -->
		<div class="clearfix"></div>
		<!-- Footer -->
		<footer class="site-footer">
			<div class="footer-inner bg-white">
				<div class="row">
					<div class="col-sm-6">
						Copyright &copy; 2018
					</div>
					<div class="col-sm-6 text-right">
						Designed by <a href="https://color.com">Moon4Light</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- /.site-footer -->
	</div>
	<!-- /#right-panel -->

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
	<script src="assets/js/main.js"></script>

	<!--  Chart js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

	<!--Chartist Chart-->
	<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
	<script src="assets/js/init/weather-init.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
	<script src="assets/js/init/fullcalendar-init.js"></script>


</body>

</html>
