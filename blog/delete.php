<?php
  $servername =  "46.229.230.117";
  $username = "nr026900";
  $password = "vnawaxyv";
  $dbname = "nr026900db";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$identifikator = $_GET['delete'];

$sql= "DELETE FROM clanky WHERE id = $identifikator LIMIT 1";

$result=mysqli_query($con,$sql);

?>

<a href="../welcome.php">[ záznam sa zmazal - späť na hlavnú stránku]</a>
