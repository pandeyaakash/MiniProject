<?php
session_start();
	if(!isset($_SESSION['username'])){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}
	$name=$_SESSION['username'];
	$connection=new MongoClient();
	$db=$connection->society;
	$collection=$db->maintainance;
	$user1=$collection->findOne(array("username"=> $name));
	$coll=$db->users;
	$user2=$coll->findOne(array("username"=>$name));
	$paydate=date_parse_from_format("m/d/Y",$user1['date']);
	$today=date('m/d/Y');
	if($paydate["month"]<$today["month"]){
		header('Location: http://localhost:8081/MiniProject/paymaint.php');
	}
	else{
		$flag=1;
		echo "<html><script>alert('You have already paid maintainance for this month')</script></html>";
	}
?>


<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url="http://localhost:8081/MiniProject/residentpost_login.php">
        <script type="text/javascript">
            window.location.href = "http://localhost:8081/MiniProject/residentpost_login.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        If you are not redirected automatically, follow the <a href='http://localhost:8081/MiniProject/residentpost_login.php'>link to login page</a>
    </body>
</html>