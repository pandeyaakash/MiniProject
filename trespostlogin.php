<?php
	session_start();
	if(!isset($_SESSION['username'])){
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
<title>SocietyMaster - Residential Society Software</title>

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
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            
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
  <center> <h1> Welcome Treasurer! </h1>
    </div>   
  </div>
</main>

<div class="container" id="explore">
<div> <br> 
<div style="width:33.33%;float:left;" class="col-sm-6 col-md-3">
      <div class="thumbnail"> <a href="trespost_dues.php"> <img src="images/notice.png" alt="analytics-icon">
        <div class="caption">
          <h3>Dues Management</h3>
          <p>Manage dues of the society </p>
        </div>
      </div>
    </div>
    
    
    <div style="width:33.33%;float:left;" class="col-sm-6 col-md-3">
      <div class="thumbnail"> <a href="trespost_expense.php"><img src="images/expen.png" alt="analytics-icon">
        <div class="caption">
          <h3>Expense Handling</h3>
          <p>Manage Society Expenses </p>
        </div>
      </div>
    </div>
    
    
    <div style="width:33.33%;float:left;" class="col-sm-6 col-md-3">
      <div class="thumbnail"> <a href="adddoc.php"> <img src="images/doc.png" alt="analytics-icon">
        <div class="caption">
          <h3>Add Documents</h3>
          <p>Add/Delete Documents from the society database! </p>
        </div>
      </div>
    </div>
    
    
    </div>

  
</div>

  <div class="container">
  <section class="row breath">
    <div class="col-md-12 footerlinks"> <a href="#">About</a><a href="#">Help</a> <a href="#">Contact</a> <a href="#">Terms</a>
      <p>&copy; MIT PUNE. All Rights Reserved</p>
    </div>
  </section>
  
  </div>
</div>


<script src="js/jquery.js"></script> 
<script src="js/smaster.js"></script> 
<script src="js/easing.js"></script> 
<script src="js/typer.js"></script> 
<script src="js/nicescroll.js"></script> 
<script src="js/ketchup.all.js"></script> 
<script src="js/bootstrap.js"></script> 

<script>
    $(function () {
      $('[data-typer-targets]').typer();
    });
  </script> 



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
