<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">User List</a> <a href="#" class="current">User List</a> </div>
    <h1>User List
        <a href="registration.php" class="btn btn-primary"> 
      Add New</a>
    </h1>
  </div>

 <div class="container-fluid"><hr>

 <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>User List </h5> 
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                	 <th style="text-align: left;">Sl. No.</th>
                    <th style="text-align: left;">Username</th>
          					<th style="text-align: left;">Email</th>          				        					
          					<th style="text-align: left;">Action</th>
                </tr>                  

              </thead>
              <tbody>

<?php
$showDataQuery = "SELECT * FROM users";
$runDataQuery = mysqli_query($connect,$showDataQuery);

if ($runDataQuery==true) {

	$snCount=1;
		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


                <tr class="gradeX">
                  <td><?php echo $snCount;$snCount++;?></td> 	
                  <td><?php echo $myData['username'];?></td>				  
        				  <td><?php echo $myData['email'];?></td>  
                  <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-mini" href="user_delete_core.php?delete_user_id=<?php echo $myData['id'];?>"> Delete </a></td>
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