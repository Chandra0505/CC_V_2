<!--==========================
      Portfolio Section
    ============================-->
<section id="portfolio" class="section-bg">
	<div class="container">

		<header class="section-header">
			<h3 class="section-title">Popular Courses</h3>
		</header>

		<div class="row">
			<div class="col-lg-12">
				<ul id="portfolio-flters">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-app">App</li>
					<li data-filter=".filter-card">Card</li>
					<li data-filter=".filter-web">Web</li>
				</ul>
			</div>
		</div>


		<div class="row portfolio-container">
			<?php
	require './functions/config.php';
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$sql = "SELECT `c_id`, `c_name`, `c_image`, `c_price`, `c_discount`, `c_filter`, `c_data_title`, `c_link` FROM `course` WHERE 1 order by c_id ASC";
	$result = $conn->query($sql); 
		 if ($result->num_rows > 0) {
// output data of each row
		while($row = $result->fetch_assoc()) {
//			print_r($row);
			?>

			<div class="<?php echo $row['c_filter']; ?>">
				<div class="portfolio-wrap">
					<figure>
						<img src="<?php echo $row['c_image']; ?>" class="img-fluid" alt="">
						<!--                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">-->
						<a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="<?php echo $row['c_data_title']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
						<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
					</figure>

					<div class="portfolio-info">
						<h4><a href="<?php echo $row['c_link']; ?>">
								<?php echo $row["c_name"]; ?></a></h4>
						<!--                <h4><a href="#">App 1</a></h4>-->
						<!--						<p>App</p>-->
						<!--
						<div class="course_info">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							<span>20 Student</span>&nbsp;&nbsp;&nbsp;&nbsp;

							<i class="fa fa-star" aria-hidden="true"></i>
							<span>5 Ratings</span>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<span>Free</span>
						</div>
-->


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
								<div class="course_price ml-auto"><span>$320</span>$220</div>
							</div>
						</div>



					</div>
				</div>
			</div>

			<?php
          	}
	}

?>

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
-->

			<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>
-->

		</div>

	</div>
</section><!-- #portfolio -->
