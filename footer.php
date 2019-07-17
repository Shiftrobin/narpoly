					
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>About Us</h4>
								<!-- ul>
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>	 -->
								<p>Narsingdi Polytechnic Institute (NPI) established as a non residential public polytechnic institute in 2006 among the 18 new polytechnic institutes in Bangladesh. The four independent departments such as Computer, Civil, Food  and Refrigeration & Air Conditioning technologies with more than one thousand students included 2nd shift program are being run along with well equip laboratories.</p>							
							</div>
						</div>						
				
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Important Links</h4>
								<ul>
									<li><a href="https://bangladesh.gov.bd/index.php">Bangladesh Portal</a></li>
									<li><a href="https://moedu.gov.bd/">Ministry of Education</a></li>
									<li><a href="http://www.techedu.gov.bd/">Directorate of Technical Education</a></li>
									<li><a href="http://www.techedu.gov.bd/">Skills Development Project</a></li>
									<li><a href="http://bteb.gov.bd/">Technical Education Board</a></li>
								
								</ul>								
							</div>
						</div>																		
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay update with our latest<br>
									<?php 

									if (isset($_REQUEST['action'])) {
											if ($_REQUEST['action']=='subscribed') {
											echo "<font style='color:white;font-size:20px;font-weight:bold;'>Subscribed</font>";
									}else
									 {
								       echo "<font style='color:white;font-size:20px;font-weight:bold;'>Not Subscribed</font>";
									 }
									}
								    ?>
								</p>
								<div class="" id="mc_embed_signup">

									 <form action="newsletter.php" method="POST">
									  <div class="input-group">
									    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" name="NewsletterBtn" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 


								</div>
							</div>
						</div>											
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
<a href="<?php echo home_base_url(); ?>" target="_blank">Narsingdi Polytechnic Institute</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>							
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>