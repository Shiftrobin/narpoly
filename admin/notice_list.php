<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Notice List</a> <a href="#" class="current">Notice List</a> </div>
    <h1>Notice List
        <a href="add_new_notice.php" class="btn btn-primary"> 
      Add New</a>
    </h1>
  </div>

 <div class="container-fluid"><hr>

 <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Notice List

            <span>  <?php
if (isset($_REQUEST['action'])) {
  
  if ($_REQUEST['action']=='true') {
    echo "<font color='green'>Data Inserted</font>";
  }else
  {
       echo "<font color='red'>Data not Inserted</font>";

  }
}

?></span>
</h5>

          
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                	 <th style="text-align: left;">Sl. No.</th>
                    <th style="text-align: left;">Name</th>
          					<th style="text-align: left;">Date</th>
          					<th style="text-align: left;">Download</th>          					
          					<th style="text-align: left;">Action</th>
                </tr>                  

              </thead>
              <tbody>

<?php
$showDataQuery = "SELECT * FROM notices_tbl";
$runDataQuery = mysqli_query($connect,$showDataQuery);

if ($runDataQuery==true) {

	$snCount=1;
		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


                <tr class="gradeX">
                  <td><?php echo $snCount;$snCount++;?></td> 	
                  <td><?php echo $myData['file_name'];?></td>				  
        				  <td><?php echo $myData['upload_date'];?></td>        				 
				         <td class="center"><a href="notices/<?php echo $myData['file_num'];?>" class="btn btn-primary btn-mini">Click To Download</a></td>                 
                  <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-mini" href="delete_notice_core.php?delete_notice_id=<?php echo $myData['notice_id'];?>"> Delete </a></td>
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