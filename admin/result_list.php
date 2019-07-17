<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Result List</a> <a href="#" class="current">Result List</a> </div>
    <h1>Result List
      <a href="add_new_result.php" class="btn btn-primary"> 
      Add New</a>
    </h1>
  </div>

 <div class="container-fluid"><hr>

 <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Result List 
            	<span>  <?php
if (isset($_REQUEST['action'])) {
	
	if ($_REQUEST['action']=='true') {
		echo "<font color='green'>Saved Successfully</font>";
	}else
	{
       echo "<font color='red'>Not Saved</font>";

	}
}

?></span></h5>

          
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                	<th style="text-align: left;">Sl. No.</th>
                  <th style="text-align: left;">Roll No.</th>
        					<th style="text-align: left;">Registration No.</th>
        					<th style="text-align: left;">Name</th>
        					<th style="text-align: left;">Department </th>
        					<th style="text-align: left;">Session</th>
        					<th style="text-align: left;">Semester</th>
        					<th style="text-align: left;">Shift</th>
        					<th style="text-align: left;">Grade</th>
        					<th style="text-align: left;">Action</th>
                </tr>                  

              </thead>
              <tbody>

<?php
$showDataQuery = "SELECT * FROM results_tbl";
$runDataQuery = mysqli_query($connect,$showDataQuery);

if ($runDataQuery==true) {

	$snCount=1;
		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


                <tr class="gradeX">
                  <td><?php echo $snCount;$snCount++;?></td> 	
                  <td><?php echo $myData['roll_no'];?></td>
				  <td><?php echo $myData['reg_no'];?></td>
				  <td><?php echo $myData['name'];?></td>
				  <td><?php echo $myData['department'];?></td>
				  <td><?php echo $myData['session'];?></td>
				  <td><?php echo $myData['semester'];?></td>
				  <td><?php echo $myData['shift'];?></td>	
				  <td class="center"><?php echo $myData['grade'];?></td>                  
                  <td><a href="edit_result.php?edit_result_id=<?php echo $myData['result_id'];?>" class="btn btn-primary btn-mini"> Edit</a> | <a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-mini" href="delete_result_core.php?delete_result_id=<?php echo $myData['result_id'];?>"> Delete </a></td>
                </tr>

   <?php

	}
}

?>
             
                

              </tbody>
            </table>
          </div>
        </div>



</div>





</div>



<?php
include('footer.php');
?>