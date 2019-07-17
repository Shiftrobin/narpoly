<?php 
include('dbcon.php');


$delete_gallery_id = $_REQUEST['delete_gallery_id'];

$deleteQuery = "DELETE FROM gallery_tbl WHERE gallery_id=$delete_gallery_id";

$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if ($runDeleteQuery==true) {
	
	header("location: gallery_list.php?deleted");
}
else{

}


?>