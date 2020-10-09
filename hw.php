<?php
include("connection.php");

$query = "INSERT INTO LOGIN VALUES('mayur','mayur123',)";

$data = mysqli_query($conn,$query);
if($data)
{
echo "DATA INSERTED SUCCESSFULLY!!!!!!!";
}
?>
