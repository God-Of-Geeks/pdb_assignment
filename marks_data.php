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

$sql_1 = "SELECT students_dat.Student_Id,
     students_dat.first_name as Name,
     marks_dat.cour_id as course_id,
     marks_dat.marks,
     CASE
         WHEN marks_dat.marks > 90 THEN 'S'
         WHEN marks_dat.marks BETWEEN 85 AND 90 THEN 'A'
         WHEN marks_dat.marks BETWEEN 80 AND 85 THEN 'B'
         WHEN marks_dat.marks BETWEEN 75 AND 80 THEN 'C'
         WHEN marks_dat.marks BETWEEN 70 AND 75 THEN 'C'
         WHEN marks_dat.marks BETWEEN 65 AND 70 THEN 'D'
         WHEN marks_dat.marks BETWEEN 60 AND 65 THEN 'E'
         ELSE 'F'
     END AS Grade
FROM students_dat,marks_dat,course_dat
where students_dat.student_id = marks_dat.stud_id and marks_dat.cour_id = course_dat.course_id";

$result = $conn->query($sql_1);

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
