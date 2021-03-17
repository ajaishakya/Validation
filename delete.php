<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";

// create connection
$conn=new mysqli($servername,$username,$password,$dbname);

// check connection

if($conn->connect_error)
{
	die("Connection Failed".$conn->connect_error);
}
echo("Connected Successfully");
echo"<br>";

// Update VALUES
$id=$_POST["id"];

$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/CRUD/modal/admin.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
