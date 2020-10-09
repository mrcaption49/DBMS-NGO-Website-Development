<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
</head>
<body>
<form method="GET" action="">
volunteerid : <input type="text" name="volunteerid"><br><br>
Password : <input type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>

<?php
$vid = $_GET['volunteerid'];
$psw = $_GET['password'];


$query = "INSERT INTO LOGIN VALUES('$vid','$psw')";

$data = mysqli_query($conn,$query);
if($data)
{
echo "DATA INSERTED SUCCESSFULLY!!!!!!!";
}
?>


</body>
</html>
