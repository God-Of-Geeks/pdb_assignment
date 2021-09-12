<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// get the post records
$txtid = $_POST['cour_id'];
$txtfirst = $_POST['stud_id'];
$txtlast = $_POST['marks'];

$sql = "INSERT INTO `marks_dat` (`cour_id`, `stud_id`, `marks`) VALUES ('$txtid', '$txtfirst', $txtlast)";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Records Inserted";
} else {
  echo "some error occured while inserting Records";
}

mysqli_close($conn);
 ?>
