<?php
session_start();
include("connection49.php");
?>

<form method="post" action="">
	Name : <input type="text" name="name" placeholder="Enter Name"><br><br>
	Password : <input type="password" name="password" placeholder="Enter Password"><br><br>
	<input type="submit" name="submit" value="Log IN" style="font-family:Trebuchet MS;font-size:18px;">
	</form>


<?php
if(isset($_POST['submit']))
{
	$user = $_POST['name'];
	$pswrd = $_POST['password'];
	$query = "SELECT * FROM LOGIN WHERE username='$user' && password='$pswrd'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['vol_name']=$user;
		header('location:adminlog.php');
	}
	else
	{
		echo "login fail";
	}
}
?>