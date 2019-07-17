<?php 
include('dbcon.php');


$delete_user_id = $_REQUEST['delete_user_id'];

$deleteQuery = "DELETE FROM users WHERE id=$delete_user_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: user_list.php?deleted");
}
else{

}










?>