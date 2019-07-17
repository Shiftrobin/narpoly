	<?php

	include('dbcon.php');

//edit result data code

	if (isset($_REQUEST['result_edit_btn'])) {

		        $FullName = $_REQUEST['FullName'];
			    $RollNo = $_REQUEST['RollNo'];
			    $RegistrationNo = $_REQUEST['RegistrationNo'];
			    $Department = $_REQUEST['Department'];
			    $Session = $_REQUEST['Session'];
			    $Semester = $_REQUEST['Semester'];
			    $Shift = $_REQUEST['Shift'];	
				$Grade = $_REQUEST['Grade'];
				$result_editing_id =$_REQUEST['result_editing_id'];


	$UpdateQuery = "UPDATE results_tbl SET roll_no='$RollNo',reg_no='$RegistrationNo',name='$FullName',department='$Department',session='$Session',semester='$Semester',shift='$Shift',grade='$Grade' WHERE result_id = '$result_editing_id' ";

	$RunUpdateQuery = mysqli_query($connect,$UpdateQuery);
		
		if ($RunUpdateQuery == true) {
			 header('location:result_list.php?edited');
		}

	}





		?>

