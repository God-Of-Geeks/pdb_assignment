<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// get the post records
$c_id_ch = $_POST['c_id_ch'];
$s_id_ch = $_POST['s_id_ch'];
$c_marks = $_POST['c_marks'];


$sql = "UPDATE marks_dat SET marks = '$c_marks' WHERE cour_id = '$c_id_ch' and stud_id = '$s_id_ch'";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Records Updated";
} else {
  echo "some error occured while updating the Records";
}

mysqli_close($conn);
 ?>
