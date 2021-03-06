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



<main id="top" class="masthead5" role="main">
  <center> <h2> View Documents </h2>
    </div>   
  </div>
</main>

<br>
<br>

<?php

$connection= new Mongo();

$data ="<table style='border:1px solid black; border-collapse:collapse' align='center' width='50%'; border='1px'>";
$data .="<caption> <h3> DOCUMENTS </h3> </caption>";
$data .="<thead>";
$data .="<tr>";
$data .="<th>SUBJECT</th>";
$data .="<th>DATE</th>";
$data .="<th>PURPOSE</th>";
$data .="</tr>";
$data .="</thead>";
$data .="<tbody>";

try{
	$db= $connection->society;
	$collection=$db->documents;
	$cursor=$collection->find();
	foreach($cursor as $document){
		$data .="<tr>";
		$data .="<td>".$document["Subject"]."</td>";
		$data .="<td>".$document["Date"]."</td>";
		$data .="<td>".$document["purpose"]."</td>";
		$data .="</tr>";
		
	}
	$data .="</tbody>";
	$data .="</table>";
	echo $data;

}catch(MongoException $mongoexception){
	print $mongoexception;
	exit;
}

?>

  <div class="container">
  <section class="row breath">
    <div class="col-md-12 footerlinks">       <p>&copy; MIT PUNE. All Rights Reserved</p>
    </div>
  </section>
  
  
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
