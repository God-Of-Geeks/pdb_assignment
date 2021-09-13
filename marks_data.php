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

$sql_0 = "TRUNCATE tabLe temp";

$sql_1 = "INSERT INTO temp SELECT *
FROM students_dat
INNER JOIN marks_dat
ON marks_dat.stud_id=students_dat.student_id";

$sql_2 = "SELECT temp.Student_Id,
     temp.first_name as Name,
     temp.cour_id as course_id,
     temp.marks,
     CASE
         WHEN temp.marks > 90 THEN 'S'
         WHEN temp.marks BETWEEN 85 AND 90 THEN 'A'
         WHEN temp.marks BETWEEN 80 AND 85 THEN 'B'
         WHEN temp.marks BETWEEN 75 AND 80 THEN 'C'
         WHEN temp.marks BETWEEN 70 AND 75 THEN 'C'
         WHEN temp.marks BETWEEN 65 AND 70 THEN 'D'
         WHEN temp.marks BETWEEN 60 AND 65 THEN 'E'
         ELSE 'F'
     END AS Grade
FROM temp;";

$run_0 = $conn->query($sql_0);
$run_1 = $conn->query($sql_1);
$result = $conn->query($sql_2);

echo "<table>
<tr>
<th>Course Id</th>
<th>Student id</th>
<th>Student Name</th>
<th>Student Marks</th>
<th>Student Grade</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['course_id'] . "</td>";
  echo "<td>" . $row['Student_Id'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['marks'] . "</td>";
  echo "<td>" . $row['Grade'] . "</td>";
echo "</tr>";
}
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
