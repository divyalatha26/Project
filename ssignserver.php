
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "renuka@45";
$dbname="divya";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$pan=$_POST['pan'];
	$password=$_POST['password'];
	$sql="INSERT INTO seller values('$firstname','$lastname','$email',$phone,'$address','$pan','$password')";
	if ($conn->query($sql) === TRUE) {
    $_SESSION['selleremail']=$email;
    header('location: sellerdashboard.php');


	} else {
    	echo "<h1>Wrong credentials</h1>";
	}

	$conn->close();
?>



