<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "workbinder";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn-> connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$salt = "workbinder";
	$password_encrypted = sha1($password.$salt);


	$sql = "INSERT INTO signup (name, email, password)
	VALUES ('$name', '$email', '$password_encrypted')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
