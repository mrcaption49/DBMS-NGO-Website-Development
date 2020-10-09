<?php
  session_start();
 if (isset($_SESSION['husername'])){
   
	   }
   else {
	   header("location: index.php");
  }
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
      <!--  <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Manage Students</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['husername']. "</h1>";
		 echo "<br>";
		 echo "<h1>(</h1>";
		    echo "<h1>" . $_SESSION['department']. "</h1>";   
            echo "<h1>)</h1>";			
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>DASHBOARD</a></li>
            <li><a href="manage-student.php" class="active"><i class="fa fa-users fa-fw"></i>MANAGE STUDENTS</a></li>
			<li><a href="placdrive.php"><i class="fa fa-home fa-fw"></i>PLACEMENT DRIVES</a></li>
			<li><a href="internship.php"><i class="fa fa-home fa-fw"></i>INTERNSHIPS</a></li>
            <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>PREFERENCES</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>SIGN OUT</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="login.php">Home KKWIEER</a></li>
                <li><a href="placdrive.php">Drives Home</a></li>
                     <li><a href="Notif.php">Notification</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
              
                     
                    
					<td><a  class="white-text templatemo-sort-by">First Name </a></td>
                    <td><a class="white-text templatemo-sort-by">Last Name </a></td>
                    <td><a class="white-text templatemo-sort-by">USN</a></td>
                    <td><a  class="white-text templatemo-sort-by">Mobile</a></td>
					   <td><a class="white-text templatemo-sort-by">Email</a></td>
                       <td><a  class="white-text templatemo-sort-by">Dob </a></td>
   <td><a class="white-text templatemo-sort-by">Current Sem</a></td>               
   <td><a  class="white-text templatemo-sort-by">Branch</a></td>
   <td><a  class="white-text templatemo-sort-by">SSC Percentage </a></td>
   <td><a class="white-text templatemo-sort-by">HSC/Diploma Percentage</a></td>
			      <td><a  class="white-text templatemo-sort-by">BE Aggregate</a></td>
			      <td><a  class="white-text templatemo-sort-by">Current Backlogs </a></td>
				     <td><a  class="white-text templatemo-sort-by">History of Backlogs </a></td>
				     <td><a  class="white-text templatemo-sort-by">Detain Years</a></td>
					 <td><a  class="white-text templatemo-sort-by">Action </a></td>
					   <td><a  class="white-text templatemo-sort-by">Action </a></td>
				  </thead>
			   </tr>
			   
			   <?php
$p = $_SESSION['department'];
$num_rec_per_page=15;
$con=mysqli_connect('localhost','root','root','details');
//mysqlii_select_db('details');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM basicdetails WHERE Approve=0 and Branch='$p' LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query($con,$sql); //run the query

while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

print "<tr>"; 
 
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>";
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Sem'] . "</td>"; 
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSC'] . "</td>"; 
print "<td>" . $row['HSC'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";
print "<td> <a href='manage-student.php?Approve=" . $row['USN'] . "'><b>Approve</b></a></td>";
print "<td> <a href='manage-student.php?Reject=" . $row['USN'] . "'><b>Reject</b></a></td>";

print "</tr>"; 

}
?> 

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div>

 
  <div class="pagination-wrap">
  <ul class="pagination">
 

 
 
			  <?php 
		
$num_rec_per_page=15;
$connect=mysqli_connect('localhost','root','root','details');
//mysqli_select_db('details');
$sql = "SELECT * FROM basicdetails where Approve=0 and Branch='$p'"; 
$rs_result = mysqli_query($connect,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page); 

 
$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
	 if($currentpage == 0)
	{
	   
	}
	else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
	{
	
		if( $currentpage > 1 && $currentpage <= $totalpage)
			{
				
				$prev = $currentpage-1;
				echo "<li><a  href='manage-student.php?page=".$prev."'><</a></li>";
				
			}
	
	if($totalpage > 1){
$prev = $currentpage-1;
	for ($i=$prev+1; $i<=$currentpage+2; $i++){
		echo "<li><a href='manage-student.php?page=".$i."'>".$i."</a></li>";
  }
  }
	
	
	if($totalpage > $currentpage  )
	{
		$nxt = $currentpage+1;
		echo "<li><a  href='manage-student.php?page=".$nxt."' >></a></li>";
	}

	 echo "<li><a>Total Pages:".$totalpage."</a></li>";
}	
 ?> 
</ul>
</div>

 
 <?php
 
 $con=mysqli_connect('localhost','root','root','details');
 if($_GET["Approve"]!="")
 {
	 $appr=$_GET["Approve"];
	 $sql="UPDATE `basicdetails` SET Approve='1',ApprovalDate=CURRENT_TIMESTAMP WHERE USN=$appr";
	 if(mysqli_query($con,$sql))
	 {
		   echo "<script type='text/javascript'>alert('Record Approved');</script>";
			           echo "<center>Redirecting you back to Login Page! If not Goto <a href='manage-student.php'> Here </a></center>";
			            echo "<meta http-equiv='refresh' content ='1; url=manage-student.php'>"; 
	 }
	 else
		 echo mysqli_error($con);
	 
 } 

 

if($_GET["Reject"]!="")
 {       $rej=$_GET["Reject"];
	 $sql="DELETE FROM `basicdetails` WHERE USN=$rej ";
	  if(mysqli_query($con,$sql))
	 {
		   echo "<script type='text/javascript'>alert('Record Rejected');</script>";
			            echo "<center>Redirecting you back to manage student page! If not Goto <a href='manage-student.php'> Here </a></center>";
			            echo "<meta http-equiv='refresh' content ='1; url=manage-student.php'>"; 
	 }
	 else
		 echo mysqli_error($con);
	 
 } 
 
 
 
 ?>

<br><br><center><label class="control-label" for="inputNote"><center><h2>OR</h2></center> <br/> <br/>To View All Student Click Link below:</label><br/>
			   <br/>
			   <a href="manage-users1.php" class="templatemo-blue-button">View All</a></center>				  
            </form>
              
            
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
           
          </div> 
         <div> <footer class="text-right">
		 <br>
          <p>Copyright &copy; KKWIEER | Developed by T.E (I.T)</p>
          </br>
		  </footer></div>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>