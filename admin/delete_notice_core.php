<?php 
include('dbcon.php');


$delete_notice_id = $_REQUEST['delete_notice_id'];

$deleteQuery = "DELETE FROM notices_tbl WHERE notice_id=$delete_notice_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: notice_list.php?deleted");
}
else{

}


?>