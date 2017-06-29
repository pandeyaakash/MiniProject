<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validate(){
	if(document.addevent.Title.value==""){
		alert("Title cannot be empty");
		document.addevent.Title.focus();
		return false;
	}
	var inputdate= new Date(document.addevent.Date.value);
	var today= new Date();
	if(inputdate.setHours(0,0,0,0)<today.setHours(0,0,0,0)){
		alert("Enter a Valid Date");
		document.addevent.Date.focus();
		return false;
	}
	if(document.addevent.desc.value==""){
		alert("Description cannot be empty");
		document.addevent.desc.focus();
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
  <center> <h1> Details of the event </h1>
    </div>   
  </div>
</main>

<br>
<br>

<form name="addevent" onsubmit="return validate()" action="add_event.php" method="POST">
<table align="center" width="50%" >

<tr>
<td align="right"><h3>Title </td>
<td><input type="text" name="Title"></td>
</tr>

<tr>
<td align="right"><h3>Date: </td>
<td><input type="date" name="Date"></td>
</tr>


<tr>
<td align="right"><h3>Event Description </td>
<td><textarea cols="50" rows="20" name="desc"></textarea></td>
</tr>


<tr rowspan="2">
<td colspan="2" align="center"><input type="Submit" name="Submit"></td>
</tr>

</table>
</form>
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
        

<table align="center" width="50%">
<caption><h1>Compose Your Complaint</h1></caption>

</body>
</html>
