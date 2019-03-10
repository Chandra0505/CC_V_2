<?php
	require './functions/config.php';
//	require './admin/session.php';
	session_start();

	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$sql = "SELECT `c_id`, `c_name`, `c_image`, `c_price`, `c_discount` FROM `course` WHERE c_id= 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();
//			print_r($row);
		$_SESSION["id"] = $row['c_id'];
		$_SESSION["name"] = $row['c_name'];
		
		$_SESSION["price"] = $row['c_price'];
			

	}
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Course Details</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/course.css">
	<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">

	<style>
		.newsletter_button {
		width: 120px;
		height: 35px;
		background: #18d26e;
		border-radius: 4px;
		border: none;
		outline: none;
		cursor: pointer;
		font-size: 14px;
		text-transform: uppercase;
		color: #FFF;
		font-weight: 500;
		letter-spacing: 0.1em;
	}

		
	</style>

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo_text">Course <span>Cube</span></div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="#">Page</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
									<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

									<!-- Hamburger -->

									<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_mm"><a href="#">About</a></li>
					<li class="menu_mm"><a href="#">Courses</a></li>
					<li class="menu_mm"><a href="#">Blog</a></li>
					<li class="menu_mm"><a href="#">Page</a></li>
					<li class="menu_mm"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>

		<!-- Course -->

		<div class="course">
			<div class="container">
				<div class="row">

					<!-- Course -->
					<div class="col-lg-8">

						<div class="course_container">
							<div class="course_title">
								<?echo $_SESSION["name"]; ?>
							</div>

							<!-- Course Image -->
							<div class="course_image"><img src="images/course_image.jpg" alt=""></div>

							<!-- Course Tabs -->
							<div class="course_tabs_container">
								<div class="tabs d-flex flex-row align-items-center justify-content-start">
									<div class="tab active">description</div>
									<div class="tab">curriculum</div>
									<div class="tab">reviews</div>
								</div>
								<div class="tab_panels">

									<!-- Description -->
									<div class="tab_panel active">
										<div class="tab_panel_title">Software Training</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
												<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>
											</div>
											<div class="tab_panel_section">
												<div class="tab_panel_subtitle">Requirements</div>
												<ul class="tab_panel_bullets">
													<li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
													<li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
													<li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
													<li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
												</ul>
											</div>
											<div class="tab_panel_section">
												<div class="tab_panel_subtitle">What is the target audience?</div>
												<div class="tab_panel_text">
													<p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
											<div class="tab_panel_faq">
												<div class="tab_panel_title">FAQ</div>

												<!-- Accordions -->
												<div class="accordions">

													<div class="elements_accordions">

														<div class="accordion_container">
															<div class="accordion d-flex flex-row align-items-center">
																<div>Can I just enroll in a single course?</div>
															</div>
															<div class="accordion_panel">
																<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
															</div>
														</div>

														<div class="accordion_container">
															<div class="accordion d-flex flex-row align-items-center active">
																<div>I'm not interested in the entire Specialization?</div>
															</div>
															<div class="accordion_panel">
																<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
															</div>
														</div>

														<div class="accordion_container">
															<div class="accordion d-flex flex-row align-items-center">
																<div>What is the refund policy?</div>
															</div>
															<div class="accordion_panel">
																<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
															</div>
														</div>

														<div class="accordion_container">
															<div class="accordion d-flex flex-row align-items-center">
																<div>What background knowledge is necessary?</div>
															</div>
															<div class="accordion_panel">
																<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
															</div>
														</div>

														<div class="accordion_container">
															<div class="accordion d-flex flex-row align-items-center">
																<div>Do i need to take the courses in a specific order?</div>
															</div>
															<div class="accordion_panel">
																<p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
															</div>
														</div>

													</div>

												</div>
											</div>
										</div>
									</div>

									<!-- Curriculum -->
									<div class="tab_panel tab_panel_2">
										<div class="tab_panel_content">
											<div class="tab_panel_title">Software Training</div>
											<div class="tab_panel_content">
												<div class="tab_panel_text">
													<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
												</div>

												<!-- Dropdowns -->
												<ul class="dropdowns">
													<li class="has_children">
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
														<ul>
															<li>
																<div class="dropdown_item">
																	<div class="dropdown_item_title"><span>Lecture 1.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																	<div class="dropdown_item_text">
																		<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="dropdown_item">
																	<div class="dropdown_item_title"><span>Lecture 1.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																	<div class="dropdown_item_text">
																		<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li class="has_children">
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
														<ul>
															<li>
																<div class="dropdown_item">
																	<div class="dropdown_item_title"><span>Lecture 2.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																	<div class="dropdown_item_text">
																		<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="dropdown_item">
																	<div class="dropdown_item_title"><span>Lecture 2.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
																	<div class="dropdown_item_text">
																		<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 3:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 4:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 5:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<!-- Reviews -->
									<div class="tab_panel tab_panel_3">
										<div class="tab_panel_title">Course Review</div>

										<!-- Rating -->
										<div class="review_rating_container">
											<div class="review_rating">
												<div class="review_rating_num">4.5</div>
												<div class="review_rating_stars">
													<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
												</div>
												<div class="review_rating_text">(28 Ratings)</div>
											</div>
											<div class="review_rating_bars">
												<ul>
													<li><span>5 Star</span>
														<div class="review_rating_bar">
															<div style="width:90%;"></div>
														</div>
													</li>
													<li><span>4 Star</span>
														<div class="review_rating_bar">
															<div style="width:75%;"></div>
														</div>
													</li>
													<li><span>3 Star</span>
														<div class="review_rating_bar">
															<div style="width:32%;"></div>
														</div>
													</li>
													<li><span>2 Star</span>
														<div class="review_rating_bar">
															<div style="width:10%;"></div>
														</div>
													</li>
													<li><span>1 Star</span>
														<div class="review_rating_bar">
															<div style="width:3%;"></div>
														</div>
													</li>
												</ul>
											</div>
										</div>

										<!-- Comments -->
										<div class="comments_container">
											<ul class="comments_list">
												<li>
													<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
														<div class="comment_image">
															<div><img src="images/comment_1.jpg" alt=""></div>
														</div>
														<div class="comment_content">
															<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																<div class="comment_author"><a href="#">Milley Cyrus</a></div>
																<div class="comment_rating">
																	<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
																</div>
																<div class="comment_time ml-auto">1 day ago</div>
															</div>
															<div class="comment_text">
																<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
															</div>
															<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
															</div>
														</div>
													</div>
													<ul>
														<li>
															<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
																<div class="comment_image">
																	<div><img src="images/comment_2.jpg" alt=""></div>
																</div>
																<div class="comment_content">
																	<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																		<div class="comment_author"><a href="#">John Tyler</a></div>
																		<div class="comment_rating">
																			<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
																		</div>
																		<div class="comment_time ml-auto">1 day ago</div>
																	</div>
																	<div class="comment_text">
																		<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
																	</div>
																	<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																		<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																		<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
														<div class="comment_image">
															<div><img src="images/comment_3.jpg" alt=""></div>
														</div>
														<div class="comment_content">
															<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																<div class="comment_author"><a href="#">Milley Cyrus</a></div>
																<div class="comment_rating">
																	<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
																</div>
																<div class="comment_time ml-auto">1 day ago</div>
															</div>
															<div class="comment_text">
																<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
															</div>
															<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
															</div>
														</div>
													</div>
												</li>
											</ul>
											<div class="add_comment_container">
												<div class="add_comment_title">Add a review</div>
												<div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Course Sidebar -->
					<div class="col-lg-4">
						<div class="sidebar">

							<!-- Feature -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Course Feature</div>
								<div class="sidebar_feature">
									<div class="course_price">
										<?echo 							'<span>$ </span>'.
$_SESSION["price"]; ?>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<!--									
								<button type="submit" class="newsletter_button">Enroll</button>-->
									
									<form action="enroll.php">
											<button type="submit" class="newsletter_button">Enroll</button>
										</form>
										

									</div>

									<!-- Features -->
									<div class="feature_list">

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
											<div class="feature_text ml-auto">2 weeks</div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
											<div class="feature_text ml-auto">10</div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
											<div class="feature_text ml-auto">6</div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
											<div class="feature_text ml-auto">Yes</div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
											<div class="feature_text ml-auto">35</div>
										</div>

									</div>
								</div>
							</div>

							<!-- Feature -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Teacher</div>
								<div class="sidebar_teacher">
									<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="teacher_image"><img src="images/teacher.jpg" alt=""></div>
										<div class="teacher_title">
											<div class="teacher_name"><a href="#">Jacke Masito</a></div>
											<div class="teacher_position">Marketing & Management</div>
										</div>
									</div>
									<div class="teacher_meta_container">
										<!-- Teacher Rating -->
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Average Rating:</div>
											<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
										</div>
										<!-- Teacher Review -->
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Review:</div>
											<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
										</div>
										<!-- Teacher Quizzes -->
										<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
											<div class="teacher_meta_title">Quizzes:</div>
											<div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
										</div>
									</div>
									<div class="teacher_info">
										<p>Hi! I am Masion, I’m a marketing & management eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum nam nulla ipsum.</p>
									</div>
								</div>
							</div>

							<!-- Latest Course -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Latest Courses</div>
								<div class="sidebar_latest">

									<!-- Latest Course -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image">
											<div><img src="images/latest_1.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
											<div class="latest_price">Free</div>
										</div>
									</div>

									<!-- Latest Course -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image">
											<div><img src="images/latest_2.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
											<div class="latest_price">$170</div>
										</div>
									</div>

									<!-- Latest Course -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image">
											<div><img src="images/latest_3.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
											<div class="latest_price">$220</div>
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


	<!--==========================
  Footer
============================-->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6 footer-info">
						<h3>Course Cube</h3>
						<div>
							<p>Coursera provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
						</div><br>

						<div>
							<p>Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved.</p>
						</div><br>

						<div class="footer_section footer_mobile">
							<div class="footer_mobile_content">
								<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a>&nbsp;&nbsp;
									<a href="#"><img src="images/mobile_2.png" alt=""></a></div>
							</div>
						</div>


					</div>

					<div class="col-lg-4 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>

						<div class="social-links">
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
						</div>

					</div>

				</div>
			</div>
		</div>

	</footer><!-- #footer -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="js/course.js"></script>
</body>

</html>