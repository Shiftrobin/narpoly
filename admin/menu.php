<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <!-- <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        
      </ul> -->
      
      <h6 style="color: white;">Welcome to Narsingdi Polytechnic Institute (NPI) Admin Area  </h6>
    

   <!--  <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>    
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li> -->


   <!--  <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text" style="color: white;">Logout</span></a></li> -->
  </ul>
</div>
<!--close-top-Header-menu-->

<!--start-top-serch-->
<div id="search">
  <!-- <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button> -->
  <li style="color: white;list-style: none;">Logged User: <?php echo $_SESSION['username']; ?> <a href="logout.php" style="color: white;"><i class="icon-key"></i> Log Out</a></li>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>


    <li class="submenu"> <a href="result_list.php"><i class="icon icon-th-list"></i> <span>Results</span></a>
      <ul>
        <li><a href="result_list.php">Result List</a></li>
        <li><a href="add_new_result.php">Add New Result</a></li>      
      </ul>
    </li>

    <li class="submenu"> <a href="notice_list.php"><i class="icon icon-file"></i> <span>Notices</span></a>
      <ul>
        <li><a href="notice_list.php"> Notice List </a></li>
        <li><a href="add_new_notice.php">Add New Notice</a></li>      
      </ul>
    </li>
     <li class="submenu"> <a href="teachers_list.php"><i class="icon icon-file"></i> <span>Teachers List</span></a>
      <ul>
        <li><a href="teachers_list.php"> Teachers List </a></li>
        <li><a href="add_new_teacher.php">Add New Teacher</a></li>      
      </ul>
    </li>
    <li class="submenu"> <a href="gallery_list.php"><i class="icon icon-file"></i> <span>Gallery</span></a>
      <ul>
        <li><a href="gallery_list.php"> Gallery List </a></li>
        <li><a href="add_new_gallery.php">Add New Picture</a></li>      
      </ul>
    </li>
   <li class="submenu"> <a href="newsletter_list.php"><i class="icon icon-th-list"></i> <span>Newsletter Email List</span></a>
      <ul>
        <li><a href="newsletter_list.php">Email List</a></li>             
      </ul>
    </li>
    <li class="submenu"> <a href="user_list.php"><i class="icon icon-file"></i> <span>User Management</span></a>
      <ul>
        <li><a href="user_list.php"> User List </a></li>
        <li><a href="registration.php">Add New User</a></li>      
      </ul>
    </li>



  
  </ul>
</div>
<!--sidebar-menu-->
