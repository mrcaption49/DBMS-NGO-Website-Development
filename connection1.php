<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo";

$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn)
		echo "Connection ok";

	else
		die("connection failed because".mysqli_connect_error());

?>