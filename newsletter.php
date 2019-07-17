<?php
include('dbcon.php');

if (isset($_POST['NewsletterBtn'])) {

    $email = $_POST['email'];


$Query = "INSERT INTO newsletter_tbl (email) VALUES('$email')";
$RunQuery = mysqli_query($connect,$Query);

if ($RunQuery==true) {
	header('location: index.php?action=subscribed');
		}else{

			header('location: index.php?action=notsubscribed');
		}

	}


?>