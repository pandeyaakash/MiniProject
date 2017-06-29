<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}
	$name=$_SESSION['username'];
	$conn= new MongoClient();
	$db=$conn->society;
	$collection=$db->users;
	$uname=$_POST["Username"];
	$flatno=$_POST["Flatno"];
	$pass=$_POST["Password"];
	$contact=$_POST["Contact"];

	$criteria=array("username"=>"$name");
	$newdata=array('$set'=>array( "username" => "$uname", "flatno" => "$flatno","contact no" => "$contact", "password" => "$pass"));
	$options=array("upsert"=>true);
	$collection->update($criteria,$newdata,$options);
	$_SESSION[username]=$uname;
?>
<script>alert('Profile Edited Successfully');</script>
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
        If you are not redirected automatically, follow the <a href='http://localhost:8081/MiniProject/residentpost_login.php'>link to example</a>
    </body>
</html>