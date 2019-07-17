<?php 
include('dbcon.php');


$delete_teachers_id = $_REQUEST['delete_teachers_id'];

$deleteQuery = "DELETE FROM teachers_tbl WHERE id=$delete_teachers_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: teachers_list.php?deleted");
}
else{

}


?>