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
  <center> <h2> Generate Receipts for the residents! </h2>
    </div>   
  </div>
</main>

<br>
<br>

<table align="center" width="50%" >

<tr>
<td align="right">Username </td>
<td><input type="text" name="Username"><br></td>
</tr>

<tr><br>
<td align="right">Receipt Num</td>
<td><input type="integer" name="RecNu"></td>
</tr>

<tr>
<td align="right">Amount</td>
<td><input type="text" name="Amt"></td>
</tr>

<tr>
<td align="right">Due Date </td>
<td><input type="date" name="DueD"></td>
</tr>

<tr rowspan="2">
<td colspan="2" align="center"><input type="Submit" name="Submit"></td>
</tr>

</table>

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

<tr>
<td align="right">Subject</td>
<td><input type="text" name="Subject"></td>
</tr>

<tr>
<td align="right">Date:</td>
<td><input type="date" name="date"></td>
</tr>

<tr>
<td align="right">Complaint Description</td>
<td><textarea cols="50" rows="20"></textarea></td>
</tr>

<tr rowspan="2">
<td colspan="2" align="center"><input type="Submit" name="Submit"></td>
</tr>

</table>
</script>

</body>
</html>
