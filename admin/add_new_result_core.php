	<?php

	include('dbcon.php');




//add new result save data code

		if (isset($_REQUEST['FullName']) && isset($_REQUEST['RollNo']) && isset($_REQUEST['RegistrationNo']) && isset($_REQUEST['Department']) && isset($_REQUEST['Session']) && isset($_REQUEST['Semester']) && isset($_REQUEST['Shift']) &&isset($_REQUEST['Grade'])
			) {

				$FullName = $_REQUEST['FullName'];
			    $RollNo = $_REQUEST['RollNo'];
			    $RegistrationNo = $_REQUEST['RegistrationNo'];
			    $Department = $_REQUEST['Department'];
			    $Session = $_REQUEST['Session'];
			    $Semester = $_REQUEST['Semester'];
			    $Shift = $_REQUEST['Shift'];	
				$Grade = $_REQUEST['Grade'];



		$InsertQuery = "INSERT INTO results_tbl (roll_no,reg_no,name,department,session,semester,shift,grade) VALUES ('$RollNo','$RegistrationNo','$FullName','$Department','$Session','$Semester','$Shift','$Grade') ";	
		
		$RunQuery = mysqli_query($connect, $InsertQuery);	


		if($RunQuery == true) {
			header('location: result_list.php?action=true');
		}else{
			header('location: result_list.php?action=false');			 
		}


	}	





		?>

