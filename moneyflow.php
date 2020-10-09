<?php
session_start();
echo "<p style='font-family:Tw Cen MT; font-size:30px; color:rgba(0,0,0,0.8);'>Welcome ".$_SESSION['vol_name']."</p>";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.col-3 {width: 20%;height:60%;
  background-color: #33b5e5;
  color: #ffffff;}
.col-4 {width: 30%;float: right; padding: 18px;
  height:60%;
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

.header {
  background-color: #666;
  color: #ffffff;
  padding: 15px;
  
}

table{
	width: 90%;
	margin: 29px auto;
	border-collapse: collapse;
	text-align: left;
}
tr{
	border-bottom: 1px solid #cbcbcb;
}
th,td{
	border: none;
	height: 29px;
	padding: 2px;
}
tr:hover{
	background: #F5F5F5;
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
<p style="color:#ffffff; font-family:Trebuchet MS; font-size:20px"><span align="left">We're glad you could help.</span><a style="color:#ffffff; font-family:Trebuchet MS; font-size:19px" href="logout page.php"><span align="right"> Log Out</a></span></p>
</div>




<div class="row">
  <div class="col-3 menu">
    <ul>
      <li><a href="http://localhost/ngo/act_rec.php" style="text-decoration:none; color:#ffffff">Activity Record</li>
      <li><a href="http://localhost/ngo/vol_rec.php" style="text-decoration:none; color:#ffffff">Volunteer Record</li>
      <li><a href="http://localhost/ngo/spon_rec.php" style="text-decoration:none; color:#ffffff">Sponsered Record</li>
      <li class="active"><a href="#" style="text-decoration:none; color:#ffffff">Money Flow</li>
	  <li><a href="http://localhost/ngo/valid.php" style="text-decoration:none; color:#ffffff">Volunteer Validation</li>
	  <li><a href="http://localhost/ngo/act_create.php" style="text-decoration:none; color:#ffffff">Create Activity<a></li>
    </ul>
  </div>

  <div class="col-9">
    <h1>ABC</h1>
    <p>welcome</p>
    <p>welcome</p>
  </div>
  <div class="col-4">
    <ul> Notice :
	<marquee direction = "up" scrolldelay = "200">
      <li>activity news</li>
	  <br>
      <li>achievements news</li>
	  <br>
      <li>Feedback news</li>
	 </marquee>
    </ul>
	<br>
	<br>
	<ul>
      <li>.</li>
      <li>.</li>
      <li>.</li>
    </ul>
  </div>

</div>

<div class="footer">
<p style="color:#ffffff; font-family:Trebuchet MS; font-size:20px"><span align="left;">We're glad you could help.</span></p>
</div>

</body>
</html>