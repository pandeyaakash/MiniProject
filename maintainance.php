<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: http://localhost:8081/MiniProject/login.php');
}
$name=$_SESSION['username'];

$connection= new Mongo();

$data ="<table style='border:1px solid black; border-collapse:collapse' align = 'center'; width='50%'; border='1px'>";
$data .="<caption>PENDING MAINTAINANCE</caaption>";
$data .="<thead>";
$data .="<tr>";
$data .="<th><h3>USER</h3></th>";
$data .="<th><h3>AMMOUNT</h3></th>";
$data .="<th><h3>DATE</h3></th>";
$data .="<th><h3>MEANS</h3></th>";
$data .="</tr>";
$data .="</thead>";
$data .="<tbody>";

try{
	$db= $connection->society;
	$collection=$db->maintainance;
	$cursor=$collection->find({"status":"unpaid"});
	foreach($cursor as $document){
		$data .="<tr>";
		$data .="<td>".$document["username"]."</td>";
		$data .="<td>".$document["ammount"]."</td>";
		$data .="<td>".$document["date"]."</td>";
		$data .="<td>".$document["means"]."</td>";
		$data .="</tr>";
		
	}
	$data .="</tbody>";
	$data .="</table>";
	echo $data;

}catch(MongoException $mongoexception){
	print $mongoexception;
	exit;
}

?>