<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<fieldset>
<legend>insert data</legend>
<form name="insdata" method="post" action="insert_courses.php">

<p>
<label for="course_id">Course Id : </label>
<input type="text" name="txtid" id="txtid">
</p>

<p>
<label for="course_name">course_name :</label>
<input type="text" name="txtfirst" id="txtfirst">
</p>

<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>



<fieldset>
  <legend>delete data</legend>
  <form name="deldata" method="post" action="course_del.php">

  <p>
  <label for="id">Enter the course_id to delete the course : </label>
  <input type="text" name="dtxtid" id="dtxtid">
  </p>

  <p>
  <input type="submit" name="Submit" id="Submit" value="Submit">
  </p>
</form>
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

mysqli_close($conn);
?>
</fieldset>

</body>
</html>
