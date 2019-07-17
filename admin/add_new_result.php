<?php 
include('header.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Add New Result</a> <a href="#" class="current">Add New Result</a> </div>
    <h1>Add New Result</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Result</h5>
        </div>
        <div class="widget-content nopadding">

          <form action="add_new_result_core.php" method="POST" class="form-horizontal">


            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span6" name="FullName" placeholder="Enter Full Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Roll No. :</label>
              <div class="controls">
                <input type="number" class="span6" name="RollNo" placeholder="Enter Roll Number" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Registration No. :</label>
              <div class="controls">
                <input type="number"  class="span6" name="RegistrationNo" placeholder="Enter Registration Number"  />
              </div>
            </div>          
            <div class="control-group">
                   <label class="control-label">Department :</label>
                   <div class="controls">
                    <div class="form-select" id="default-select">
                      <select name="Department" class="span6">
                        <option  datd-display="">Select Department</option>
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
                <input type="text" class="span6" name="Session" placeholder="Enter Session" />
              </div>
            </div>   
          <div class="control-group">
                   <label class="control-label">Semester :</label>
                   <div class="controls">
                    <div class="form-select" id="default-select">
                      <select name="Semester" class="span6">
                        <option  datd-display="">Select Semester</option>
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
                        <option  datd-display="">Select Shift</option>
                        <option value="First">First</option>
                        <option value="Second">Second</option> 
                      </select>
                  </div>
               </div>
            </div>

            <div class="control-group">
              <label class="control-label">Grade :</label>
              <div class="controls">
                <input type="text" class="span6" name="Grade" placeholder="Enter GPA out of 4" />
              </div>
            </div>        

          
            <div class="form-actions">
              <button type="submit" name="AddNewResultBtn" class="btn btn-success">Save</button>
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