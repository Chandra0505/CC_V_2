<?php
	require './admin/session.php';
//	print_r($assoc_array);
$u_id = $assoc_array['id'];
//			this code is for fechin link for course
				if($stmt = $conn->prepare("SELECT * FROM enroll_course WHERE id=?")){
				$stmt -> bind_param('i', $u_id);
    			$stmt->execute();
    			$stmt->store_result();
				$assoc_array = fetchAssocStatement($stmt);
//				print_r($assoc_array);
				
				$e_link = $assoc_array['e_link'];
				
				$link = $_SESSION["$e_link"] = $e_link;
				
			}

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
	<link rel="stylesheet" href="./Admin/assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
	<!-- Left Panel -->

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
					</li>
					<li class="menu-title">UI elements</li><!-- /.menu-title -->
					<li class="menu-item-has-children active dropdown">
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i fclass="menu-icon fa fa-th"></i>Forms</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
						</ul>
					</li>

					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside><!-- /#left-panel -->

	<!-- Left Panel -->

	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

		<!-- Header-->
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
<!--
					<a class="navbar-brand" href="./"><img src="./Admin/images/logo.png" alt="Logo"></a>
					<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
-->
					<a class="navbar-brand" href="./">Course Cube</a>
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
									<span class="photo media-left"><img alt="avatar" src="./Admin/images/avatar/1.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Jonathan Smith</span>
										<span class="time float-right">Just now</span>
										<p>Hello, this is an example msg</p>
									</div>
								</a>
								<a class="dropdown-item media" href="#">
									<span class="photo media-left"><img alt="avatar" src="./Admin/images/avatar/2.jpg"></span>
									<div class="message media-body">
										<span class="name float-left">Jack Sanders</span>
										<span class="time float-right">5 minutes ago</span>
										<p>Lorem ipsum dolor sit amet, consectetur</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="./Admin/images/admin.jpg" alt="User Avatar">
						</a>

						<div class="user-menu dropdown-menu">
							<a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

							<a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

							<a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

							<a class="nav-link" href="./Admin/logout.php"><i class="fa fa-power-off"></i>Logout</a>
						</div>
					</div>
				</div>
			</div>
		</header><!-- /header -->
		<!-- Header-->

		<div class="content">
			<div class="animated fadeIn">


				<div class="alerts">
					<div class="row">

						<div class="col-md-12">

							<div class="card">
								<div class="card-header">
									<strong class="card-title">Sorry!!</strong>
								</div>
								<div class="card-body">
									<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">Notice</span>
                                        You have already enrolled in this course.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

									<div class="alert alert-success" role="alert">
										<h4 class="alert-heading">Well done!</h4>
										<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
										<hr>
										<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p><br>
										
										<a href="<?php echo $link	; ?>" class="btn btn-success btn-lg">Start Learning</a>&nbsp;&nbsp;
										
										<a href="http://google.com" class="btn btn-success btn-lg">Go to Dashboard</a>
										
<!--											<button type="button" class="btn btn-success btn-lg">Success</button>-->
											
											
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .alerts -->


			</div><!-- .animated -->
		</div><!-- .content -->

		<div class="clearfix"></div>

		<footer class="site-footer">
			<div class="footer-inner bg-white">
				<div class="row">
					<div class="col-sm-6">
						Copyright &copy; 2018 
					</div>
					<div class="col-sm-6 text-right">
						Designed by <a href="#">Moon4Light</a>
					</div>
				</div>
			</div>
		</footer>


	</div><!-- /#right-panel -->

	<!-- Right Panel -->

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
	<script src="./Admin/assets/js/main.js"></script>


</body>

</html>