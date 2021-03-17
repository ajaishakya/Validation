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
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$uname=$_POST["uname"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$sql = "UPDATE user 
		SET fname='$fname', lname='$lname', uname='$uname',password='$pass', cpassword='$cpass', address='$address', phone=$phone, email='$email'
		WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/CRUD/modal/admin.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
