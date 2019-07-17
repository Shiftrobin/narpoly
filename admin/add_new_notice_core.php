<?php 

include('dbcon.php');


	if (isset($_REQUEST['file_name'])) {

	    $file_name = $_REQUEST['file_name'];

		$file_num_name = $_FILES["file_num"]["name"];
		$file_num_tmpName = $_FILES["file_num"]["tmp_name"];
		$location = "notices/";
		$nameForDB = uniqid();

		move_uploaded_file($file_num_tmpName, $location."$nameForDB.pdf");
			   
		$InsertQuery = "INSERT INTO notices_tbl (file_num,file_name) VALUES ('$nameForDB.pdf','$file_name') ";	
		
		$RunQuery = mysqli_query($connect, $InsertQuery);	


		if($RunQuery == true) {
			header('location: notice_list.php?action=true');
		}else{
			header('location: notice_list.php?action=false');			 
		}


	}	




?>