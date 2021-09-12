<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// get the post records
$dtxtid = $_POST['dtxtid'];


$sql = "DELETE FROM course_dat WHERE course_id = '$dtxtid' ";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Records deleted";
} else {
  echo "some error occured while deleting the Record(s) ";
}

mysqli_close($conn);
 ?>
