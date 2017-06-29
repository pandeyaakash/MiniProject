
<?php
$ammount=$_GET["Ammount"];
$spent=$_GET["Spent"];
$bill=$_GET["Bill"];
$date=$_GET["Date"];
$comment=$_GET["Comments"];


$connection= new MongoClient();
$db= $connection->society;
$documents_collection=$db->expense;
$doc=array(
	  "Ammount" => "$ammount",
	  "Spent" => "$spent",
	  "Bill" => "$bill",
	  "Date" => "$date",
	  "Comments" => "$comment"
	  );
$documents_collection->insert($doc);
?>

<script>alert('Expense Added Successfully');</script>
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