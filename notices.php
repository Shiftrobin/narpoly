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
								Notices 				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="results.php"> Notices </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

					<div class="section-top-border">
						<h3 class="mb-30">Notices</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">Sl. No.</div>
									<div class="country">Name</div>
									<div class="visit">Date</div>
									<div class="percentage">Download</div>
								</div>



			<?php	

			$showDataQuery = "SELECT * FROM notices_tbl";
			$runDataQuery = mysqli_query($connect,$showDataQuery);

			if ($runDataQuery==true) {

				$snCount=1;
					
					While($myData = mysqli_fetch_array($runDataQuery)){ ?>


								<div class="table-row">
									<div class="serial"><?php echo $snCount;$snCount++;?></div>
									<div class="country"><?php echo $myData['file_name'];?></div>
									<div class="visit"><?php echo $myData['upload_date'];?></div>	
									<div class="percentage"><a href="admin/notices/<?php echo $myData['file_num'];?>">Click To Download</a></div>								
								</div>
							

				<?php

					}
				}

				?>

							</div>
						</div>
					</div>

					

					</div>
				</div>

				<!-- End Align Area -->






<?php 
include('footer.php');
?>