<?php 
include('dbcon.php');


$delete_result_id = $_REQUEST['delete_result_id'];

$deleteQuery = "DELETE FROM results_tbl WHERE result_id=$delete_result_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: result_list.php?deleted");
}
else{

}










?>