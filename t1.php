<?php
include("connection.php");
$username = filter_input(INPUT_POST, 'volunteerid');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)||!empty($password))
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "ngo";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO login (volunteerid, password);
values ('$volunteerid','$password')";
}

?>
