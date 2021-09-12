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
<form name="insdata" method="post" action="insert_marks.php">

<p>
<label for="id">Course id : </label>
<input type="text" name="cour_id" id="cour_id">
</p>

<p>
<label for="first_name">Student id :</label>
<input type="text" name="stud_id" id="stud_id">
</p>

<p>
<label for="last_name">Marks :</label>
<input type="text" name="marks" id="marks">
</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>








<fieldset>
  <legend>update data</legend>
  <form name="upddata" method="post" action="update_marks.php">

    <p>
    <label for="c_id_ch">Course id : </label>
    <input type="text" name="c_id_ch" id="c_id_ch">
    </p>
     <p>
      <label for="s_id_ch">Student id : </label>
      <input type="text" name="s_id_ch" id="s_id_ch">
      </p>

  <p>
  <label for="c_marks">Change marks :</label>
  <input type="text" name="c_marks" id="c_marks">
  </p>

  <p>
  <input type="submit" name="Submit" id="Submit" value="Submit">
  </p>
</form>
</fieldset>

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

</body>
</html>
