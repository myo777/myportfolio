<?php  

$sname = "localhost";
$uname = "root";
$password = "root";

$db_name = "image_upload";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}