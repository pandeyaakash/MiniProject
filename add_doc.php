

<?php
$subject=$_GET["Subject"];
$date=$_GET["Date"];
$purpose=$_GET["Purpose"];


$connection= new MongoClient();
$db= $connection->society;
$documents_collection=$db->documents;
$doc=array(
	  "Subject" => "$subject",
	  "Date" => "$date",
	  "purpose" => "$purpose"
	  );
$documents_collection->insert($doc);
?>

<script>alert('Document Added Successfully');</script>
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