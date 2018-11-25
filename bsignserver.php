
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
	$firstname=$_POST['firstname1'];
	$lastname=$_POST['lastname1'];
	$email=$_POST['email1'];
	$phone=$_POST['phone1'];
	$address=$_POST['address1'];
	$pan=$_POST['pan1'];
	$password=$_POST['password1'];
	$sql="INSERT INTO buyer values('$firstname','$lastname','$email',$phone,'$address','$pan','$password')";
	if ($conn->query($sql) === TRUE) {
    	$_SESSION['email']= $email;
		header('location:buyerdash.php');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>



