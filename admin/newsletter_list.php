<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Newsletter Email List</a> <a href="#" class="current">Newsletter Email List</a> </div>
    <h1>Newsletter Email List</h1>
  </div>

 <div class="container-fluid"><hr>

 <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Newsletter Email List 
            	<span>  <?php
if (isset($_REQUEST['action'])) {
	
	if ($_REQUEST['action']=='true') {
		echo "<font color='green'>Data Inserted</font>";
	}else
	{
       echo "<font color='red'>Data not Inserted</font>";

	}
}

?></span></h5>

          
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                	<th style="text-align: left;">Sl. No.</th>
                    <th style="text-align: left;">Email Address</th>        					
        		    <th style="text-align: left;">Action</th>
                </tr>                  

              </thead>
              <tbody>

<?php
$showDataQuery = "SELECT * FROM newsletter_tbl";
$runDataQuery = mysqli_query($connect,$showDataQuery);

if ($runDataQuery==true) {

	$snCount=1;
		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


                <tr class="gradeX">
                  <td><?php echo $snCount;$snCount++;?></td> 
                  <td><?php echo $myData['email'];?></td>
                  <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-mini" href="newsletter_delete_core.php?delete_newsletter_id=<?php echo $myData['id'];?>"> Delete </a></td>
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