<?php
include("connection.php");
?>

<html>
<head>
<title>Form site</title>
</head>
<body>
<form method="GET" action="">
volunteerid : <input type="text" name="volunteerid"><br><br>
Password : <input type="password" name="password"><br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if($_GET['submit']);
{
$vid=$_GET['volunteerid'];
$pass=$_GET['password'];

$query  = "INSERT INTO login VALUES($vid,$pass)";

$data=mysqli_query($conn,$query);

if($data)
{
	echo"DATA INSERTED!!!!!!";
}
}
?>









</body>
</html>
