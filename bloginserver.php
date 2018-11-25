<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "renuka@45";
$dbname="divya";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$email=$_POST['email1'];
$password=$_POST['password1'];
$sql="SELECT * FROM  buyer WHERE email='$email' and password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	$_SESSION['email']= $email;
	header('location:buyerdash.php');	
}

else{
	echo "wrong credentials";
}
$conn->close();

?>
