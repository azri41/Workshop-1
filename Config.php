<?php
	$servername = "localhost";
	$username = "admin";
	$password = "123";

	$conn = new mysqli($servername, $username, $password);	//connect database

	if($conn ->connect_error){
		die("Connection failed: ". $conn->connect_error);	//die = exit , . utk joined
	}
	else{
	//echo "<script>alert('Database connected successfully')</script>";
	mysqli_select_db($conn,'carrental');
	}	
//require once file.php call file
?>
