<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Gallery List</a> <a href="#" class="current">Gallery List</a> </div>
    <h1>Gallery List
        <a href="add_new_gallery.php" class="btn btn-primary"> 
      Add New</a>
    </h1>
  </div>

 <div class="container-fluid"><hr>

 <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Gallery List 
            	<span>  <?php
if (isset($_REQUEST['action'])) {
  
  if ($_REQUEST['action']=='uploaded') {
    echo "<font color='green'>uploaded successfully</font>";
  }elseif ($_REQUEST['action']=='tryagain') {
   echo "<font color='green'>File upload failed, please try again.</font>";
  }elseif ($_REQUEST['action']=='error') {
    echo "<font color='green'>Sorry, there was an error uploading your file.</font>";
  }elseif ($_REQUEST['action']=='filesallowed') {
  echo "<font color='green'>Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.</font>";
  }elseif ($_REQUEST['action']=='selectfile') {
  echo "<font color='green'>Please select a file to upload</font>";
  }
  else
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
                  <th style="text-align: left;">Name</th>
        					<th style="text-align: left;">Picture</th>					
        					<th style="text-align: left;">Action</th>
                </tr>                  

              </thead>
              <tbody>

<?php
$showDataQuery = "SELECT * FROM gallery_tbl";
$runDataQuery = mysqli_query($connect,$showDataQuery);

if ($runDataQuery==true) {

	$snCount=1;
		
		While($myData = mysqli_fetch_array($runDataQuery)){ ?>


                <tr class="gradeX">
                  <td><?php echo $snCount;$snCount++;?></td> 	
                  <td><?php echo $myData['gallery_name'];?></td>
				          <td><img class="img-fluid" src="uploads/<?php echo $myData['gallery_num'];?>" style="height: 100px;width:100px;"/> </td>	
                  <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-mini" href="delete_gallery_core.php?delete_gallery_id=<?php echo $myData['gallery_id'];?>"> Delete </a></td>
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