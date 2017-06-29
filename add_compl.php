<?php
session_start();
$name=$_SESSION['username'];
$sub=$_POST["Subject"];
$date=$_POST["date"];
$category=$_POST["category"];
$desc=$_POST["desc"];


$connection= new MongoClient();
$db= $connection->society;
$complaints_collection=$db->complaints;
$doc=array(
	  "Subject" => "$sub",
	  "Date" => "$date",
	  "Category" => "$category",
	  "Description" => "$desc",
	  "Uname"=> "$name"
	  );
$complaints_collection->insert($doc);
?>
<script>alert('Complaint Registered Successfully');</script>
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