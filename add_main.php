<script>alert("Maintainance Paid Successfully");</script>



<?php
session_start();
if(!isset($_SESSION['username'])){
		header('Location: http://localhost:8081/MiniProject/login.php');
	}

	
$name=$_SESSION['username'];
$ammount=$_POST["ammount"];
$means=$_POST["means"];
$chequeno="NULL";
$chequeno=$_POST["chequeno"];
$date=date('m/d/Y');

$connection= new MongoClient();
$db= $connection->society;
$collection=$db->maintainance;
$doc=array(
	  "username" => "$name",
	  "ammount" => "$ammount",
	  "date" => "$date",
	  "chequeno"=>"$chequeno",
	  "means"=>"$means"
	  );
$collection->insert($doc);
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