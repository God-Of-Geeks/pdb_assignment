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
<form name="insdata" method="post" action="insert.php">

<p>
<label for="id">Id : </label>
<input type="text" name="txtid" id="txtid">
</p>

<p>
<label for="first_name">First_name :</label>
<input type="text" name="txtfirst" id="txtfirst">
</p>

<p>
<label for="last_name">Last_name :</label>
<input type="text" name="txtlast" id="txtlast">
</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>








<fieldset>
  <legend>update data</legend>
  <form name="upddata" method="post" action="update.php">

  <p>
  <label for="id">Id of the user : </label>
  <input type="text" name="utxtid" id="utxtid">
  </p>

  <p>
  <label for="first_name">update First_name :</label>
  <input type="text" name="utxtfirst" id="utxtfirst">
  </p>

  <p>
  <label for="last_name">update Last_name :</label>
  <input type="text" name="utxtlast" id="utxtlast">
  </p>
  <p>
  <input type="submit" name="Submit" id="Submit" value="Submit">
  </p>
</form>
</fieldset>


<fieldset>
  <legend>delete data</legend>
  <form name="deldata" method="post" action="delete.php">

  <p>
  <label for="id">Delete by the id of the user : </label>
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
