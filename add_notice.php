<script>alert("Event Added Successfully");</script>




<?php
$topic=$_GET["Topic"];
$date=$_GET["Date"];
$content=$_GET["content"];
$venue=$_GET["Venue"];


$connection= new MongoClient();
$db= $connection->society;
$notice_collection=$db->notice;
$doc=array(
	  "Topic" => "$topic",
	  "Date" => "$date",
	  "Content" => "$content",
	  "Venue" => "$venue"
	  );
$notice_collection->insert($doc);
?>


<script>alert('Notice Added Successfully');</script>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url="http://localhost:8081/MiniProject/add.php">
        <script type="text/javascript">
            window.location.href = "http://localhost:8081/MiniProject/add.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        If you are not redirected automatically, follow the <a href='http://localhost:8081/MiniProject/add.php'>link to login page</a>
    </body>
</html>