<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "renuka@45";
$dbname="divya";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM  seller WHERE email='$email' and password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	$_SESSION['selleremail'] = $email;
	header('location: sellerdashboard.php');
}

else{
	echo "failed";
}
$conn->close();

?>
