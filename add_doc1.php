
<?php
    session_start();
    $allowedExts = array("jpeg", "png", "jpg");
    $extension = end(explode(".", $_FILES["image"]["name"]));
	$uname=$_SESSION['username'];

    if (($_FILES["image"]["size"] < 200000)
    && in_array($extension, $allowedExts)) {
        if ($_FILES["image"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["image"]["error"] . "<br />";
        }
        else
        {
            echo "image: " . $_FILES["image"]["name"] . "<br />";
            echo "Type: " . $_FILES["image"]["type"] . "<br />";
            echo "Size: " . ($_FILES["image"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["image"]["tmp_name"] . "<br />";

            if (file_exists("documents/".$_SESSION["FirstName"] ."/" . $_FILES["image"]["name"]))
            {
                echo $_FILES["image"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["image"]["tmp_name"],"documents/". $uname ."/". $_FILES["image"]["name"]);
                echo "Stored in: " . "documents/". $uname ."/". $_FILES["image"]["name"];
				$file_destination="documents/".$uname."/".$_FILES["image"]["name"].'.'.$extension;
				$connection= new MongoClient();
	$db= $connection->society;
	$documents_collection=$db->documents;
	$subject=$_POST["Subject"];
	$date=$_POST["Date"];
	$purpose=$_POST["Purpose"];
	$doc=array(
	  "Subject" => "$subject",
	  "Date" => "$date",
	  "purpose" => "$purpose",
	  "Image" => "$file_destination"
	  );
	$documents_collection->insert($doc);
            }
        }
    } else {
        echo "Invalid file";
    }

?>