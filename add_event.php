


<?php
$sub=$_POST["Subject"];
$date=$_POST["date"];
$img=$_POST["fileToUpload"];
$des=$_POST["desc"];

$connection= new MongoClient();
$db= $connection->society;
$events_collection=$db->events;
$doc=array(
	  "Subject" => "$sub",
	  "Date" => "$date",
	  "Image" => "$img",
	  "Description" => "$des",
	  );
$events_collection->insert($doc);
?>

<script>alert('Event Added Successfully');</script>
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