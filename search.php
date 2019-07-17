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
								Results 				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="results.php"> Results </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

		        		<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Search Your Result</h3>


								<form action="search_result.php" method="POST">

									<div class="mt-10">
										<label>Roll Number</label>
										<input type="text" name="roll_no" placeholder="Enter Your Roll Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Roll Number'" required class="single-input">
									</div>
									<div class="mt-10">
										<label>Registration Number</label>
										<input type="text" name="reg_no" placeholder="Enter Your Registration Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Registration Number'" required class="single-input">
									</div>						

									<div class="mt-10">
										<label>Session</label>
										<input type="text" name="session" placeholder="Enter Your Session like this 2014-2014 or 2015-2016 or 2017-2018 format" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Session like this 2014-2014 or 2015-2016 or 2017-2018 format'" required class="single-input">
									</div>

								    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="semester">
												<option  datd-display="">Select Semester</option>
												<option value="1">1st</option>
												<option value="2">2nd</option>
												<option value="3">3rd</option>
												<option value="4">4th</option>

												<option value="5">5th</option>
												<option value="6">6th</option>
												<option value="7">7th</option>
												<option value="8">8th</option>
											</select>
										</div>
									 </div> 

									 <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="Department">
												<option  datd-display="">Select Department</option>
						                        <option value="Civil Technology">Civil Technology</option>
						                        <option value="Computer Technology">Computer Technology</option>
						                        <option value="Electrical Technology">Electrical Technology</option>
						                        <option value="Food Technology">Food Technology</option>
						                        <option value="RAC Technology">RAC Technology</option> 
											</select>
										</div>
									</div>

									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											 <select name="Shift">
						                        <option  datd-display="">Select Shift</option>
						                        <option value="First">First</option>
						                        <option value="Second">Second</option> 
						                      </select>
										</div>
									</div>
									

									<div class="mt-10">
										<input type="submit" name="search_btn" class="genric-btn primary circle arrow" value="Search">
									</div>

								</form>
							</div>




							<div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
								<div class="single-element-widget">
									<h3 class="mb-30">Building Layout</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<img src="img/layout-300x175.png" class="img-fluid">
									</div>
								
								</div>
								
							</div>




						</div>
					</div>


					</div>

					<br><br><br><br><br>
				</div>

				<!-- End Align Area -->
			




<?php 
include('footer.php');
?>