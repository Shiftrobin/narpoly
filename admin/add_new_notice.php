<?php 
include('header.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add New Notice</a> <a href="#" class="current">Add New Notice</a> </div>
    <h1>Add New Notice</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Notice</h5>
        </div>
        <div class="widget-content nopadding">

          <form enctype="multipart/form-data" method="POST" action="add_new_notice_core.php" class="form-horizontal">


            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="file_name" placeholder="Enter File Name" />
              </div>
            </div>                    
             <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="file_num" />
              </div>
            </div>       

          
            <div class="form-actions">
              <button type="submit" name="AddNewNoticeBtn" class="btn btn-success" onclick="return confirm('Are you sure?');">Save</button>
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