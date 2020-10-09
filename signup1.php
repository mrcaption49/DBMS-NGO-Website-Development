<?php
include("connection.php");
error_reporting(0);
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


$font-family:   "Roboto";
$font-size:     14px;

$color-primary: #ABA194;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
	
	
}

body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);

    height: 100vh
}

.user {
    width: 90%;
    max-width: 320px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.5s forwards;
}

.user__title {
    font-size: $font-size;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 40px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.6s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
    .form__input:focus {
        background: darken(#fff, 3%);
    }
}

.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #A2C7E5;
    transition: 0.3s;
    }
    .btn:hover {
        background:#49D49D;
    }


@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}



</style>
</head>
<body >


<header class="user__header">
        <h1 class="user__title" style="font-family:Tw Cen MT; font-size:35px;">Volunteership Registration</h1>
    </header>

<div class="user" method="GET" action="">
   
    
    <form class="form">
        <div class="form__group">
            <input type="text" name="name" placeholder="User name" class="form__input" />
			
        </div>
        
        <div class="form__group">
            <input type="email" name="email_id" placeholder="Email" class="form__input" />
			
        </div>
        
        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
			
        </div>
		
		<div class="form__group">
            <input type="tel" name="ph_no" placeholder="Contact Number" class="form__input" />
			
        </div>
        <input class="btn" type="submit" value="Register">
        
    </form>
</div>



<?php
$nam = $_GET['name'];
$psw = $_GET['password'];
$eid = $_GET['email_id'];
$phno = $_GET['ph_no'];

if($nam!="" && $psw!="" && $eid!="" && $phno!="")
{
$query = "INSERT INTO SIGNUP VALUES('$nam','$psw','$eid','$phno')";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "<p align='center' style='font-family:Tw Cen MT; font-size:20px; color:rgba(229, 29, 29);'>You've Regsitered Successfully<br> Wait for the approval by the organization</p>";
}
else 
{
	echo "<p align='center' style='font-family:Tw Cen MT; font-size:20px; color:rgba(229, 29, 29);'>Enter the correct deatils.</p>";
}
}

?>


</body>
</html>
