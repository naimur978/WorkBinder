<?php

session_start();
$_SESSION['success']="";

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "workbinder";

$conn = new mysqli($servername, $username, $password, $dbname) or die("connection failed");

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "workbinder";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);
if($row["total"] > 0){

	$_SESSION['email'] = $email;
	$_SESSION['success'] = "true";

	echo "
	<script>
		alert('Login successful');
	</script>";
	header("Location:../browse-jobs.php");


}
else{
	echo "
	<script>
		alert('Login failed');
	</script>
	";
}
$conn -> close();
?>
