<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "workbinder";

$conn = new mysqli($servername, $username, $password, $dbname) or die("connection failed");

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "workbinder";
$password_encrypted = sha1($password.$salt


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);






$con=mysqli_connect("localhost","root","","test");
$query="SELECT * FROM signup where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
 	header('location:../meteor/scripts/browse-jobs.html');
 	$_SESSION['email']=$email;
 }
else{
	echo "INVALID USERNAME AND PASSWORD";
}







if($row["total"] > 0){

	header("Location:signlog.html");


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
