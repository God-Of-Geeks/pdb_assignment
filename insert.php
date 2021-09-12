<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// get the post records
$txtid = $_POST['txtid'];
$txtfirst = $_POST['txtfirst'];
$txtlast = $_POST['txtlast'];

$sql = "INSERT INTO `students_dat` (`student_id`, `first_name`, `last_name`) VALUES ('$txtid', '$txtfirst', '$txtlast')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Records Inserted";
} else {
  echo "some error occured while inserting Records";
}

mysqli_close($conn);
 ?>
