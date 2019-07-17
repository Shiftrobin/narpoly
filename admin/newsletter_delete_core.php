<?php 
include('dbcon.php');


$delete_newsletter_id = $_REQUEST['delete_newsletter_id'];

$deleteQuery = "DELETE FROM newsletter_tbl WHERE id=$delete_newsletter_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: newsletter_list.php?deleted");
}
else{

}










?>