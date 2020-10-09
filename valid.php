<?php

include("connection.php");
error_reporting(0);
session_start();
echo "<p style='font-family:Tw Cen MT; font-size:30px; color:rgba(0,0,0,0.8);'>Welcome ".$_SESSION['vol_name']."</p>";
$results = mysqli_query($conn,"SELECT * FROM SIGNUP");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 20%;height:150%;
  background-color: #33b5e5;
  color: #ffffff;}
.col-4 {width: 30%;float: right; padding: 18px;
  height:150%;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);}
.col-5 {width: 30%;
  height:35%;
  }
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 50%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

html {
  font-family: "Lucida Sans", sans-serif;
}
body{
	font-family: Dosis;
}

.header {
  background-color: #666;
  color: #ffffff;
  padding: 15px;
  
}

table{
	width: 99%;
	margin: 5px auto;
	border-collapse: collapse;
	text-align: left;
}
tr{
	border-bottom: 1px solid #cbcbcb;
}
th,td{
	border: 1px solid #dddddd;
	height: 29px;
	padding: 2px;
  

}
tr:hover{
	background: #F5F5F5;
}
tr:nth-child(even) {
  background-color: #dddddd;
}



.footer {
   padding: 18px;
   background-color: #666;
   color: white;
   text-align: center;
   font-family: Agency FB;
}
tablea, th1 {
  border: 1px;
  border-collapse: collapse;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 15px;
  
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.menu li.active {
  background-color: #0099cc;
  color: white;
}



</style>
</head>
<body>

<div class="header">
<p style="color:#ffffff; font-family:Trebuchet MS; font-size:20px"><span align="left">We're glad you could help.</span></p>
</div>




<div class="row">
  <div class="col-3 menu">
    <ul>
      <li><a href="http://localhost/ngo/act_rec.php" style="text-decoration:none; color:#ffffff">Activity Record</li>
      <li><a href="http://localhost/ngo/vol_rec.php" style="text-decoration:none; color:#ffffff">Volunteer Record</li>
      <li><a href="http://localhost/ngo/spon_rec.php" style="text-decoration:none; color:#ffffff">Sponsers Record</li>
      
	  <li class="active"><a href="#" style="text-decoration:none; color:#ffffff">Volunteer Validation</li>
	  <li><a href="http://localhost/ngo/act_create.php" style="text-decoration:none; color:#ffffff">Create Activity<a></li>
	  <li><a href="logout page.php" style="text-decoration:none; color:#ffffff"> Log Out</a></li>
    </ul>
  </div>

  <div class="col-9">
    <h1>Volunteer Validation</h1>
    <table>
		<thead>
		 <tr>
		  <th>Volunteer Name</th>
		  <th colspan="3">Volunteer Details</th>
		  <th>Action</th>
		 </tr>
		</thead>
			<tbody>
			<?php while ($row = mysqli_fetch_array($results)){ ?>
			<tr>
			
			
			
			
			
			
			<form  method="post" action="">
        <td>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
			</td>
			
       
        <td>
        <input type="password" name="password" value="<?php echo $row['password']; ?>"  />
			</td>
			
			<td>
            <input type="email" name="email_id" value="<?php echo $row['email_id']; ?>" />
			</td>
        
        
       
		
		<td>
            <input type="tel" name="ph_no" value="<?php echo $row['ph_no']; ?>" />
			</td>
        
        
        <td>
				
				<input type="submit" name="save" value="Approve">
				<input type="submit" name="remove" value="Reject">
					
				</td>
				
		
    </form>
			
			
			
			
			
			
			
			
			
				
				
				
				
				
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
  </div>
 
  
  
  
  <div class="col-4">
    <ul> Notice :
	<marquee direction = "up" scrolldelay = "200">
      <li>Our Pilot project kick-starts trash segregation.</li>
	  <br>
      <li>Indian NGOs Recieved Rs.50000cr in foreign contributions between 2015-2019 :MHA.</li>
	  <br>
      <li>Steel city takes initiative on our campaign of proper disposal of waste.</li>
	 </marquee>
    </ul>
	<br>
	<br>
	<ul>
      <li>5 new volunteer sign ups.</li>
	  <br>
      <li>34 more volunteers intrested in Tree plantation drive-2019.</li>
	  <br>
      <li>Pending: updation of previous activity details.</li>
    </ul>
  </div>

</div>

<div class="footer">
<p style="color:#ffffff; font-family:Trebuchet MS; font-size:20px"><span align="left;">We're glad you could help.</span></p>
</div>

</body>
</html>


<?php


if(isset($_POST['save']))
{
$name = $_POST['name'];
$pass = $_POST['password'];
$em = $_POST['email_id'];
$ph = $_POST['ph_no'];



mysqli_query($conn,"INSERT INTO LOGIN VALUES ('$name', '$pass','$em', '$ph')");

header('location: valid.php');
echo "<script>window.open('valid.php','_self')</script>";
}


if(isset($_POST['remove']))
{
$name = $_POST['name'];
$pass = $_POST['password'];
$em = $_POST['email_id'];
$ph = $_POST['ph_no'];



mysqli_query($conn,"INSERT INTO REJECTED VALUES ('$name', '$pass','$em', '$ph')");

header('location: valid.php');
echo "<script>window.open('valid.php','_self')</script>";
}



?>

