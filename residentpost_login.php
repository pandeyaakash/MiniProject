<?php
	session_start();
	if(!isset($_SESSION['username'])||$_SESSION['username']=="chairman"||$_SESSION['username']=="treasurer"){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}
	$name=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Startup Responsive Landing page Template for startup, web services, newsletter signup, lead generation etc..">
<title>SocietyMaster-Resident</title>

<link href="css/smaster.css" rel="stylesheet">

<link href="css/startup.css" rel="stylesheet">


<link rel="shortcut icon" href="images/favicon.png">
<script src="js/pace.js"></script>



<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="preloader"></div>

 
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
            <li class="active"><a href="residentpost_login.html">Home</a></li>
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
  <center> <h1> Welcome <?php echo $name?> </h1>
    </div>   
  </div>
</main>

<div class="container" id="explore"> 


  <div class="section-title">
    <h2>What would you like to do today?</h2>
  </div>
  <section class="row features"> 
    
    <div style="width:33.33%;float:left">
	<a href="viewnot.php">
      <div class="thumbnail"> <img src="images/viewch.png" alt="viewchairman">
        <div class="caption">
          <h2>View</h2>
          <p>Notices From Society Board</p>
        </div>
      </div>
    </div>
    
	<div style="width:33.33%;float:left">
	<a href="addevent.php">
      <div class="thumbnail"> <img src="images/event.png" alt="viewchairman">
        <div class="caption">
          <h2>Add Event</h2>
          <p>Add pictures, share reports of the society events. </p>
        </div>
      </div>
    </div>
    
    <div style="width:33.33%;float:left">
	<a href="addcompl.php">
      <div class="thumbnail"> <img src="images/comp.png" alt="analytics-icon">
        <div class="caption">
          <h2>Complaint Box</h2>
          <p>Want to bring something to our NOTICE!!</p>
        </div>
      </div>
    </div>
   
  </section>
  
</div>
<a href="http://localhost:8081/MiniProject/paycheck.php">Pay Maintainance</a>
  <div class="container">
  <section class="row breath">
    <div class="col-md-12 footerlinks"> <a href="#">About</a><a href="#">Help</a> <a href="#">Contact</a> <a href="#">Terms</a>
      <p>&copy; MIT PUNE. All Rights Reserved</p>
    </div>
  </section>
  
  
</div>


<script src="js/jquery.js"></script> 
<script src="js/smaster.js"></script> 
<script src="js/easing.js"></script> 
<script src="js/typer.js"></script> 
<script src="js/nicescroll.js"></script> 
<script src="js/ketchup.all.js"></script> 


<script>
    $(function () {
      $('[data-typer-targets]').typer();
    });
  </script> 


<script src="js/bootstrap.js"></script>

<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>

</body>
</html>
