<?php 
include('header.php');
include('dbcon.php');
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Registration</a> <a href="#" class="current">Add New User</a> </div>
    <h1>User Registration</h1>
  </div>

 <div class="container-fluid"><hr>

<div class="row-fluid">
      <div class="span12">
            <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New User</h5>
        </div>
        <div class="widget-content nopadding">

        <?php          
        if (isset($_REQUEST['username'])){
          $username = stripslashes($_REQUEST['username']);
          $username = mysqli_real_escape_string($connect,$username); 
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($connect,$email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($connect,$password);
          $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `users` (username, password, email, trn_date)
        VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                $result = mysqli_query($connect,$query);
                if($result){
                    echo "<h3 style='color:orange;padding-left:10px;'>You are registered successfully. Click here to <a href='login.php' class='btn btn-success'>Login</a></h3>
                      ";
                }
            }else{
        ?>


          <form action="" method="POST" class="form-horizontal">


            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" placeholder="Enter Your Username" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" placeholder="Enter Your Email Adress" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="Enter Your Password"  />
              </div>
            </div>
               
            <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success">Register</button>
            </div>

          </form>

<?php } ?>

        </div>
      </div>
      </div>
    </div>




</div>


<?php
include('footer.php');
?>