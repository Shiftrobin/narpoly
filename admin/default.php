<?php 
include('header.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add New Picture</a> <a href="#" class="current">Add New Picture</a> </div>
    <h1>Add New Picture</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Picture</h5>
        </div>
        <div class="widget-content nopadding">

          <form enctype="multipart/form-data" method="POST" action="add_new_gallery_core.php" class="form-horizontal">


            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="gallery_name" placeholder="Enter File Name" />
              </div>
            </div>                    
             <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="gallery_num" />
              </div>
            </div>       

          
            <div class="form-actions">
              <button type="submit" name="AddNewGalleryBtn" class="btn btn-success" onclick="return confirm('Are you sure?');">Save</button>
            </div>

          </form>



        </div>
      </div>
      </div>
    </div>




</div>


<?php
include('footer.php');
?>







<?php 

include('dbcon.php');

	if (isset($_REQUEST['gallery_name'])) {

	    $gallery_name = $_REQUEST['gallery_name'];

		$gallery_num_name = $_FILES["gallery_num"]["name"];
		$gallery_num_tmpName = $_FILES["gallery_num"]["tmp_name"];
		$location = "gallery/";
		$nameForDB = uniqid();	

		move_uploaded_file($gallery_num_tmpName, $location."$nameForDB.jpg");
			   
		$InsertQuery = "INSERT INTO gallery_tbl (gallery_name,gallery_num) VALUES ($gallery_name,'$nameForDB.jpg') ";	
		
		$RunQuery = mysqli_query($connect, $InsertQuery);	

		if($RunQuery == true) {
			header('location: gallery_list.php?action=true');
		}else{
			header('location: gallery_list.php?action=false');			 
		}


	}	



?>






