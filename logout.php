<?php
session_start();
$name=$_SESSION['username'];
$conn= new MongoClient();
$db=$conn->society;
$collection=$db->users;
	$criteria=array("username"=>"$name");
	$newdata=array('$set'=>array( "logout_time"=>date('m/d/Y')));
	$options=array("upsert"=>true);
	$collection->update($criteria,$newdata,$options);
	
if(isset($_SESSION['username'])){
	unset($_SESSION['username']);
}
?>
<script>alert('Logged Out Successfully');</script>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url="http://localhost:8081/MiniProject/login.php">
        <script type="text/javascript">
            window.location.href = "http://localhost:8081/MiniProject/login.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        If you are not redirected automatically, follow the <a href='http://localhost:8081/MiniProject/login.php'>link to login page</a>
    </body>
</html>