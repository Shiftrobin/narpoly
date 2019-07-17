<?php 
include('header.php');
include('dbcon.php');
?>
<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Teachers				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.php"> Teachers</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

           <!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
            <?php	

			$showDataQuery = "SELECT * FROM teachers_tbl ORDER BY id DESC";
			$runDataQuery = mysqli_query($connect,$showDataQuery);

			if ($runDataQuery==true) {
				
					
					While($myData = mysqli_fetch_array($runDataQuery)){ ?>

						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="admin/uploads/<?php echo $myData['file_name'];?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p><?php echo $myData['name'];?></p>
									<a href="#"><h4><?php echo $myData['title'];?></h4></a>
									<p>
										<a href="#">+880 <?php echo $myData['phone'];?></a>
										<a href="#"><?php echo $myData['email'];?></a>
									</p>
								</div>
							</div>
						</div>
						
		    <?php

					}
				}

				?>




						<!-- <a href="#" class="text-uppercase primary-btn mx-auto mt-40">Load more courses</a>		 -->
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->

				
			
													

<?php 
include('footer.php');
?>