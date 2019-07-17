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
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.php"> Gallery</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">

		<?php	

			$showDataQuery = "SELECT * FROM gallery_tbl";
			$runDataQuery = mysqli_query($connect,$showDataQuery);

			if ($runDataQuery==true) {
				
					
					While($myData = mysqli_fetch_array($runDataQuery)){ ?>
						

						<div class="col-lg-4">
							<a href="admin/uploads/<?php echo $myData['gallery_num'];?>" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="admin/uploads/<?php echo $myData['gallery_num'];?>" alt="">				
									</div>
								</div>
							</a>
						</div>
						
						
				<?php

					}
				}

				?>
						
						
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
													

<?php 
include('footer.php');
?>