<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}


thead tr {
   background-color: #009879;
   color: #ffffff;
   text-align: left;
}
th,td {
    padding: 12px 15px;
}

tbody tr {
    border-bottom: 1px solid #dddddd;
}

tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

 tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}


</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Aventador_001";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id,course_name FROM `course_dat` ";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>course_id</th>
<th>course_name</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['course_id'] . "</td>";
  echo "<td>" . $row['course_name'] . "</td>";
echo "</tr>";
}
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
