<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Startup Responsive Landing page Template for startup, web services, newsletter signup, lead generation etc..">
<title>SocietyMaster - Residential Society Software</title>

<link href="css/smaster.css" rel="stylesheet">

<link href="css/startup.css" rel="stylesheet">


<link rel="shortcut icon" href="images/favicon.png">
<script src="js/pace.js"></script>



<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<a href="javascript:history.back(1)"><img border = "0" src ="images/goback.png" align="left" width = "163" height = "50" ></a> 
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
		
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Change Password</a></li>
                <li><a href="http://localhost:8081/MiniProject/editprofile.php">Edit Profile</a></li>
                <li><a href="http://localhost:8081/MiniProject/logout.php">Log Out</a></li>
                </ul>
            </li>

          </ul>
        </div>
      </div>
    </div>




<main id="top" class="masthead" role="main">
  <center> <h1> Complaints </h1>
    </div>   
  </div>
</main>

	<div class="container" id="explore"> 
	<div class="section-title">
    <h2><?php echo $_COOKIE['CookieID']; ?></h2>
	</div>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}
	$name=$_SESSION['username'];
	$sid=$_COOKIE['CookieID'];
	$connection=new Mongo();
	$db= $connection->society;
	$collection=$db->complaints;
	
	$disp=$collection->findOne(array("Subject"=> $sid));
	$data ="<table style='border:1px solid black; border-collapse:collapse' align = 'center'; width='50%'; border='1px'>";
	$data.="<tr>";
	$data.="<td>Subject</td>";
	$data.='<td>'.$disp["Subject"].'</td>';
	$data.="</tr>";
	
	$data.="<tr>";
	$data.="<td>Date</td>";
	$data.="<td>".$disp["Date"]."</td>";
	$data.="</tr>";
	
	$data.="<tr>";
	$data.="<td>Description</td>";
	$data.="<td>".$disp["Description"]."</td>";
	$data.="</tr>";
	
	$data.="<tr>";
	$data.="<td>Category</td>";
	$data.="<td>".$disp["Category"]."</td>";
	$data.="</tr>";
	$data.="</table>";
	echo $data;
?>
</body>
</html>
