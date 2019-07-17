<?php 
include('header.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add New Teacher</a> <a href="#" class="current">Add New Teacher</a> </div>
    <h1>Add New Teacher</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Teacher</h5>
        </div>
        <div class="widget-content nopadding">

          <form enctype="multipart/form-data" method="POST" action="add_new_teacher_core.php" class="form-horizontal">


            <div class="control-group">
              <label class="control-label">Teacher's Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Enter File Name" />
              </div>
            </div>   

            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" placeholder="Enter Title" />
              </div>
            </div>  

            <div class="control-group">
              <label class="control-label">Phone Number :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" placeholder="Enter Phone Number" />
              </div>
            </div> 

            <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" placeholder="Enter Email Address" />
              </div>
            </div> 

             <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="file_name" />
              </div>
            </div>       

          
            <div class="form-actions">
              <button type="submit" name="AddNewTeacherBtn" class="btn btn-success" onclick="return confirm('Are you sure?');">Upload</button>
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
