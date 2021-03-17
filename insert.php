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

// INSERT VALUES

$stmt = $conn->prepare("INSERT INTO user(fname,lname,uname,password,cpassword,address,phone,email) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssis",$fname,$lname,$uname,$pass,$cpass,$address,$phone,$email);

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$uname=$_POST["uname"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$stmt->execute();

$stmt->close();
$conn->close();
?>	