<?php 

$host = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "narpoly";

$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

/*if ($connect==true) {
	echo "<script> alert('Database Connected');</script>";
}
else{
	echo "<script>alert('Database Not Connected');</script>";
}*/

if ($connect==false) {
	echo "<script>alert('Database Not Connected');</script>";
}

?>