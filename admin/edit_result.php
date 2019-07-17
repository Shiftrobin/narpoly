<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Edit Result</a> <a href="#" class="current">Edit Result</a> </div>
    <h1>Edit Result</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Result</h5>
        </div>
        <div class="widget-content nopadding">



<?php if(isset($_REQUEST['edit_result_id'])){

  $edit_result_id = $_REQUEST['edit_result_id'];


  $ResultDataQuery = "SELECT * FROM results_tbl WHERE result_id=$edit_result_id";

  $runDataQuery = mysqli_query($connect,$ResultDataQuery);

  While($myData = mysqli_fetch_array($runDataQuery)){ 
 
 ?> 


          <form action="edit_result_core.php" method="POST" class="form-horizontal">

            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="FullName" value="<?php echo $myData['name'];?>" placeholder="Enter Full Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Roll No. :</label>
              <div class="controls">
                <input type="number" class="span6" name="RollNo" value="<?php echo $myData['roll_no'];?>" placeholder="Enter Roll Number" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Registration No. :</label>
              <div class="controls">
                <input type="number"  class="span6" name="RegistrationNo" value="<?php echo $myData['reg_no'];?>" placeholder="Enter Registration Number"  />
              </div>
            </div>
         
           <div class="control-group">
                   <label class="control-label">Department :</label>
                   <div class="controls">
                    <div class="form-select" id="default-select">
                      <select name="Department" class="span6">
                        <option  datd-display="" value="<?php echo $myData['department'];?>"><?php echo $myData['department'];?></option>
                        <option value="Civil Technology">Civil Technology</option>
                        <option value="Computer Technology">Computer Technology</option>
                        <option value="Electrical Technology">Electrical Technology</option>
                        <option value="Food Technology">Food Technology</option>
                        <option value="RAC Technology">RAC Technology</option>                        
                      </select>
                  </div>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">Session:</label>
              <div class="controls">
                <input type="text" class="span6" name="Session" value="<?php echo $myData['session'];?>" placeholder="Enter Session" />
              </div>
            </div>
           <div class="control-group">
                   <label class="control-label">Semester :</label>
                   <div class="controls">
                    <div class="form-select" id="default-select">
                      <select name="Semester" class="span6">
                        <option  datd-display=""  value="<?php echo $myData['semester'];?>" ><?php echo $myData['semester'];?></option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>

                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                      </select>
                  </div>
               </div>
            </div>
          
             <div class="control-group">
                   <label class="control-label">Shift :</label>
                   <div class="controls">
                    <div class="form-select" id="default-select">
                      <select name="Shift" class="span6">
                        <option  datd-display="" value="<?php echo $myData['shift'];?>"><?php echo $myData['shift'];?></option>
                        <option value="First">First</option>
                        <option value="Second">Second</option> 
                      </select>
                  </div>
               </div>
            </div>

            <div class="control-group">
              <label class="control-label">Grade :</label>
              <div class="controls">
                <input type="text" class="span6" name="Grade" value="<?php echo $myData['grade'];?>" placeholder="Enter GPA out of 4" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                <input type="hidden" class="span6" name="result_editing_id" value="<?php echo $edit_result_id;?>" placeholder="Enter GPA out of 4" />
              </div>
            </div>         

          
            <div class="form-actions">
              <button type="submit" name="result_edit_btn" class="btn btn-success">Update Result</button>
            </div>

          </form>



<?php

 }

}

?>




        </div>
      </div>
      </div>
    </div>




</div>


<?php
include('footer.php');
?>