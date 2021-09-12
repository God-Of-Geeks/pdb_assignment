<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// get the post records
$utxtid = $_POST['utxtid'];
$utxtfirst = $_POST['utxtfirst'];
$utxtlast = $_POST['utxtlast'];


$sql = "UPDATE students_dat SET first_name = '$utxtfirst', last_name = '$utxtlast' WHERE student_id = '$utxtid' ";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Records Updated";
} else {
  echo "some error occured while updating the Records";
}

mysqli_close($conn);
 ?>
