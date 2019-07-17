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