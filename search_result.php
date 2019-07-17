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
								Search Result 				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="results.php">Search Result </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

		         <div class="section-top-border">
						<h3 class="mb-30">Results</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">

<?php 

	if (isset($_POST['search_btn'])) {
		$roll_no = $_POST['roll_no'];
		$reg_no = $_POST['reg_no'];
		$semester = $_POST['semester'];
		$Department = $_POST['Department'];
		$Shift = $_POST['Shift'];
		$session = $_POST['session'];

		
	
?>


								<table class="table">
									  <thead class="thead-dark">
									    <tr>									      
									      <th scope="col">Roll No.</th>
									      <th scope="col">Registration No.</th>
									      <th scope="col">Name</th>
									      <th scope="col">Department </th>
									      <th scope="col">Session</th>
									      <th scope="col">Semester</th>
									      <th scope="col">Shift</th>
									      <th scope="col">Grade</th>
									    </tr>
									  </thead>
									  <tbody>

<?php

$showDataQuery = "SELECT * FROM results_tbl WHERE roll_no = '$roll_no' AND reg_no = '$reg_no' AND session = '$session' AND semester = '$semester' AND department = '$Department' AND shift = '$Shift'";
$runDataQuery = mysqli_query($connect,$showDataQuery);


if (mysqli_num_rows($runDataQuery) == 0) {
	echo "<center><span style='color:orange;font-size:30px;font-weight:800;margin-bottom:10px;'>No Records Found <a href='search.php' style='color:red;'>Click Here To Search More</a></span></center><br>";
}
elseif ($runDataQuery==true) {

		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


									    <tr>
									      <td><?php echo $myData['roll_no'];?></td>
									      <td><?php echo $myData['reg_no'];?></td>
									      <td><?php echo $myData['name'];?></td>
									      <td><?php echo $myData['department'];?></td>
									      <td><?php echo $myData['session'];?></td>
									      <td><?php echo $myData['semester'];?></td>
									      <td><?php echo $myData['shift'];?></td>	
									      <td><?php echo $myData['grade'];?></td>									     
									    </tr>


	<?php

		}
	}

	?>
					

									  </tbody>
									</table>
									<?php 	}?>


								</div>



							</div>



						</div>
					</div>

					</div>
				</div>

				<!-- End Align Area -->
					
					




<?php 
include('footer.php');
?>