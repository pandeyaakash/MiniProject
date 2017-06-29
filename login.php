<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Startup Responsive Landing page Template for startup, web services, newsletter signup, lead generation etc..">
<title>Login to SocietyMaster - Residential Society Software</title>

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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Accurate Analytics</a></li>
                <li><a href="#">300+ Capacity</a></li>
                <li><a href="#">Extra Facilities</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>



<main id="top" class="masthead" role="main">
  <div class="logo"> <a href="#"><img src="images/logo1.png" alt="logo"></a> </div>
  
  <div class="row">
      <div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
        <form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
          <div class="form-group">
            <div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
              <input class="form-control input-lg" name="uname" type="text" id="address" placeholder="Enter your Username" data-validate="validate(required, email)" required="required">
			  <br>
			  <input class="form-control input-lg" name="password" type="password" placeholder="Enter Your Password" required="required">
			  </div>
            <div class="col-md-5 col-sm-4">
              <button type="submit" class="btn btn-success btn-lg"><strong>Log me in!</button>
            </div>
			</div>
          </div>
        </form>
        <span id="result" class="alertMsg"></span> </div>
    </div>
    
</main>




  
</div>

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
