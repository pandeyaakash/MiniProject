<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validate(){
	if(document.adduser.Username.value==""){
		alert("Username cannot be blank");
		document.adduser.Username.focus();
		return false;
	}
	if(document.adduser.Flatno.value==""){
		alert("Flat Number cannot be blank");
		document.adduser.Flatno.focus();
		return false;
	}
	if(document.adduser.Password.value.length<8){
		alert("Password must be at least 8 charecter long");
		document.adduser.Password.focus();
		return false;
	}
	if(document.adduser.Contact.value.length!=10){
		alert("Enter a valid contact number");
		document.adduser.Contact.focus();
		return false;
	}
}

</script>
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
  <center> <h2> Add User to the Society </h2>
    </div>   
  </div>
</main>

<br>
<br>

<form name="adduser" action="add_user.php" method="POST" onsubmit="return validate()">
<table align="center" width="50%" >

<tr>
<td align="right"><h3>Username </td>
<td><input type="text" name="Username"><br></td>
</tr>

<tr><br>
<td align="right"><h3>Flat.no </td>
<td><input type="text" name="Flatno"></td>
</tr>

<tr>
<td align="right"><h3>Password </td>
<td><input type="text" name="Password"></td>
</tr>

<tr>
<td align="right"><h3>Contact Num </td>
<td><input type="integer" name="Contact"></td>
</tr>

<tr rowspan="2">
<td colspan="2" align="center"><input type="Submit" name="Submit"></td>
</tr>

</table>
</form>
  
  
</div>
<?php
$connection = new MongoClient();
$collection = $connection->society->users;
$cursor = $collection->find();
?>

<div id="value"></div>
<div id = "value1">Total Residents </div>



<div class="container">
  <section class="row breath">
    <div class="col-md-12 footerlinks">       <p>&copy; MIT PUNE. All Rights Reserved</p>
    </div>
  </section>
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
Usernum = <?php echo($cursor->count());?>

function animateValue(id, start, end, duration) {
    // assumes integer values for start and end
    
    var obj = document.getElementById(id);
    var range = end - start;
    // no timer shorter than 50ms (not really visible any way)
    var minTimer = 50;
    // calc step time to show all interediate values
    var stepTime = Math.abs(Math.floor(duration / range));
    
    // never go below minTimer
    stepTime = Math.max(stepTime, minTimer);
    
    // get current time and calculate desired end time
    var startTime = new Date().getTime();
    var endTime = startTime + duration;
    var timer;
  
    function run() {
        var now = new Date().getTime();
        var remaining = Math.max((endTime - now) / duration, 0);
        var value = Math.round(end - (remaining * range));
        obj.innerHTML = value;
        if (value == end) {
            clearInterval(timer);
        }
    }
    
    timer = setInterval(run, stepTime);
    run();
}
animateValue("value", 0, Usernum, 1000);

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
        

<table align="center" width="50%">
<caption><h1>Compose Your Complaint</h1></caption>



</body>
</html>
