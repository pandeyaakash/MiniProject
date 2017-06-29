<?php
$uname=$_POST["Username"];
$flatno=$_POST["Flatno"];
$pass=$_POST["Password"];
$contact=$_POST["Contact"];

$connection= new MongoClient();
$db= $connection->society;
$users_collection=$db->users;
$doc=array(
	  "username" => "$uname",
	  "flatno" => "$flatno",
	  "contact no" => "$contact", 
	  "password" => "$pass",
	  );
$users_collection->insert($doc);
?>
<script>alert('User Added Successfully');</script>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url="javascript:history.back(1)">
        <script type="text/javascript">
            window.location.href = "javascript:history.back(1)"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        If you are not redirected automatically, follow the <a href='javascript:history.back(1)'>link to login page</a>
    </body>
</html>
