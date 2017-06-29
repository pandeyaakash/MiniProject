<?php


	$conn= new MongoClient();
	$db=$conn->society;
	$collection=$db->users;
	$uname=$_POST['uname'];
	$pass=$_POST['password'];
	
	$user=$collection->findOne(array("username"=> $uname,"password"=> $pass));
	
		if(!empty($user)){
			session_start();
			$_SESSION[username]=$uname;
			switch($uname)
			{
				case "chairman":
					header('Location: http://localhost:8081/MiniProject/chairpost_login.php');
					break;
				case "treasurer":
					header('Location: http://localhost:8081/MiniProject/trespostlogin.php');
					break;
				default:
					header('Location: http://localhost:8081/MiniProject/residentpost_login.php');
			}
			
		}
		else{
			echo '<script>alert("Username or Password is incorrect")</script>';
			
		}


?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url="http://localhost:8081/MiniProject/residentpost_login.php">
        <script type="text/javascript">
            window.location.href = "http://localhost:8081/MiniProject/login.php"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        If you are not redirected automatically, follow the <a href='http://localhost:8081/MiniProject/login.php'>link to example</a>
    </body>
</html>