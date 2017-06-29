<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validate(){
	if(document.edituser.Username.value==""){
		alert("Username cannot be blank");
		document.edituser.Username.focus();
		return false;
	}
	if(document.edituser.Flatno.value==""){
		alert("Flat Number cannot be blank");
		document.edituser.Flatno.focus();
		return false;
	}
	if(document.edituser.Password.value.length<8){
		alert("Password Must be at least 8 charecters long");
		document.edituser.Password.focus();
		return false;
	}
	var pass=document.edituser.Password.value;
	var cpass=document.edituser.CPassword.value;
	if(pass!=cpass){
		alert("Passwords do not Match!");
		document.edituser.Password.focus();
		return false;
	}
	if(document.edituser.Contact.value.length!=10){
		alert("Enter a valid contact number");
		document.edituser.Contact.focus();
		return false;
	}
}

</script>
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

<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}
	$name=$_SESSION['username'];
	$connection= new MongoClient();
	$db= $connection->society;
	$collection=$db->users;

	$cursor=$collection->findOne(array("username"=> $name));
?>

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
                <li><a href="http://localhost:8081/MiniProject/login.php">Log Out</a></li>
                </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
	
	<main id="top" class="masthead" role="main">
  <center> <h1> Edit Profile </h1>
    </div>   
  </div>
</main>

<div class="container" id="explore"> 

<form action="edit_prof.php" name="edituser" method="POST" onsubmit="return validate()">
<table align="center" width="50%" >

<tr>
<td align="right"><h3>Username </td>
<td><input type="text" name="Username" value="<?php echo $cursor["username"]?>"><br></td>
</tr>

<tr><br>
<td align="right"><h3>Flat.no </td>
<td><input type="text" name="Flatno" value="<?php echo $cursor["flatno"]?>"></td>
</tr>

<tr><br>
<td align="right"><h3>New Password </td>
<td><input type="text" name="Password"></td>
</tr>

<tr><br>
<td align="right"><h3>Confirm Password </td>
<td><input type="text" name="CPassword"></td>
</tr>

<tr>
<td align="right"><h3>Contact Num </td>
<td><input type="integer" name="Contact" value="<?php echo $cursor["contact no"]?>"></td>
</tr>

<tr rowspan="2">
<td colspan="2" align="center"><input type="Submit" name="Submit"></td>
</tr>

</table>
<center> <a href="residentpost_login.php"><h3>Return to your Profile</h3></a>
</div>
</form>

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
</body>
</html>