<?php

include("connection.php");
error_reporting(0);


echo "<p style='font-family:Tw Cen MT; font-size:30px; color:rgba(0,0,0,0.8);'>Welcome Admin</p>";
$results = mysqli_query($conn,"SELECT * FROM VOL_REC");
$edit_state = false;

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($conn,"SELECT * FROM VOL_REC WHERE id='$id'");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$detail = $record['details'];
	$id = $record['id'];
	

	
}
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
.col-3 {width: 20%;height:80%;
  background-color: #33b5e5;
  color: #ffffff;}
.col-4 {width: 30%;float: right; padding: 18px;
  height:80%;
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
	padding: 15px;
  

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
<p style="color:#ffffff; font-family:Trebuchet MS; font-size:20px"><span align="left">Volunteer Records.</span></p>
</div>






<div class="row">
  <div class="col-3 menu">
    <ul>
      <li><a href="http://localhost/ngo/act_rec.php" style="text-decoration:none; color:#ffffff">Activity Record</li>
      <li class="active"><a href="#" style="text-decoration:none; color:#ffffff">Volunteer Record</li>
      <li><a href="http://localhost/ngo/spon_rec.php" style="text-decoration:none; color:#ffffff">Sponsers Record</li>
      
	  <li><a href="http://localhost/ngo/valid.php" style="text-decoration:none; color:#ffffff">Volunteer Validation</li>
	  <li><a href="http://localhost/ngo/act_create.php" style="text-decoration:none; color:#ffffff">Create Activity<a></li>
	  <li><a href="logout page.php" style="text-decoration:none; color:#ffffff"> Log Out</a></li>
    </ul>
  </div>


  <div class="col-9">
    <h1>Volunteer List</h1>
    <table>
	<thead>
	 <tr>
	  <th>Volunteer Name</th>
	  <th>Volunteer Details</th>
	  </tr>
	</thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)){ ?>
	 <tr>
	  <td><?php echo $row['name']; ?></td>
	  <td><?php echo $row['details']; ?></td>
	  <td>
	   <a style="text-decoration:none; color:#000000" href="vol_rec.php?edit=<?php echo $row['id']; ?>">Edit</a>
	  </td>
	  <td>
	   <a style="text-decoration:none; color:#000000" href="vol_rec.php?del=<?php echo $row['id']; ?>">Delete</a>
	  </td>
	 </tr>
	<?php } ?>
	</tbody>
	</table>
	<br>
	<form method="post" action="" align="center">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div>
			<label>New Entry</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<br>
		<div>
			<label>Details</label>
			<input type="text" name="details" value="<?php echo $detail; ?>">
		</div>
		<br>
		<div>
		<?php if($edit_state == false): ?>
		<button type="submit" name="save">Add</button>
		<?php else: ?>
		<button type="submit" name="update">Update</button>
		<?php endif ?>
			
		</div>
	</form>
	
	
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
$name = "";
$detail = "";
$id = 0;

if(isset($_POST['save']))
{
$name = $_POST['name'];
$detail = $_POST['details'];

if($name!="" && $detail!="")
{
$query = "INSERT INTO VOL_REC VALUES (NULL, '$name', '$detail')";
mysqli_query($conn,$query);
header('location: vol_rec.php');
echo "<script>window.open('vol_rec.php','_self')</script>";
}
else
{
	echo "enter something";
}
}


if(isset($_POST['update'])){
$name = $_POST['name'];
$detail = $_POST['details'];
$id = $_POST['id'];

mysqli_query($conn, "UPDATE VOL_REC SET name='$name', details='$detail' WHERE id='$id'");
header('location: vol_rec.php');
echo "<script>window.open('vol_rec.php','_self')</script>";

}

if(isset($_GET['del'])){
	$id = $_GET['del'];	
	mysqli_query($conn,"DELETE FROM VOL_REC WHERE id='$id'");
	header('location: vol_rec.php');
	echo "<script>window.open('vol_rec.php','_self')</script>";
}
?>