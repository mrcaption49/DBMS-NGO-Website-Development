<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
background-image: url(vol4.jpg);
height: 100vh;
background-size: cover;
background-position: center;
}


input[type=text], input[type=password], input[type=tel], input[type=email]{

    background-color: rgba(146, 146, 146, 0.8);
line-height: 28px;
  width: 47%;
   margin: 15px 0;
 border: 2px solid #ccc;
 font-family: "Arial";
 color: #000;
}




.container {
 text-align: left
  padding: 20px;
}


table, th {
  border-collapse: collapse;
}

::placeholder {
  color: #000;
  font-size:15px;
  opacity: 0.6; /* Firefox */
}



</style>
</head>

<body>


<table class="table">
<tr>
<th class="th" align="left"  height="500"width="600">
<br>

<h2 align="left" style="font-family:Tw Cen MT; font-size:35px;" >Volunteership Registration</h2>

 <div class="container">

	<form method="GET" action="">
	Name : <input type="text" name="name" placeholder="Enter Name" value="<?php echo($first_name) ?>"><br><br>
	Password : <input type="password" name="password" placeholder="Enter Password"><br><br>
	Email Id: <input type="email" name="email_id" placeholder="Enter E-mail Id"><br><br>
	Contact Number : <input type="tel" name="ph_no" placeholder="Enter Contact Number"><br><br>
	<input type="submit" value="Submit" style="font-family:Trebuchet MS;font-size:18px;">
	</form>
</div>

</th>
<th class="th" align="left" height="500" width="600" style="font-family:Tw Cen MT; font-size:40px;">What is essence of life?<br>To serve others and to do good.<p algin="right" style="font-family:Tw Cen MT; font-size:28px;">-ARISTOTLE</p></th>
</tr>
</table>

<?php
$nam = $_GET['name'];
$psw = $_GET['password'];
$eid = $_GET['email_id'];
$phno = $_GET['ph_no'];





  if ($_GET['submit'] == 1) {
    $first_name = htmlentities($_GET['name']);

    if (preg_match("/^[a-zA-Z'. -]+$/", $first_name)){
		echo "<p>Hello there, ".$first_name."</p>";

    } else {
       echo "<p class='error'>Your last name cannot be blank</p>";
    }
  }











$query = "INSERT INTO LOGIN VALUES('$nam','$psw','$eid','$phno')";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "DATA INSERTED SUCCESSFULLY!!!!!!!";
}
else
{
	echo "all fields req";
}

?>


 </body>
</html>
