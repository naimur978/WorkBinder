<?php
include('db_connection.php');

/*
echo $_POST['name'];
echo $_POST['password'];
echo $_POST['g_reg_no'];
echo $_POST['birth_date'];
echo $_POST['email'];
echo $_POST['cell_phone'];
echo $_POST['gender'];
echo $_POST['professional_status'];
echo $_POST['speciality'];
echo $_POST['short_biography'];
echo $_POST['action'];
*/

$name = $_POST['name'];
$password = $_POST['password'];
$g_reg_no = $_POST['g_reg_no'];
$birth_date = $_POST['birth_date'];
$email = $_POST['email'];
$cell_phone = $_POST['cell_phone'];
$gender = $_POST['gender'];
$professional_status = $_POST['professional_status'];
$speciality = $_POST['speciality'];
$short_biography = $_POST['short_biography'];


if($_POST['action']=='add'):
	$sql="select count(*) as last_user from user";
	$result=mysqli_query($db,$sql);
	$data=mysqli_fetch_assoc($result);
	$temp2= $data['last_user']+1;
	$user_id= 'u'.$temp2;
else:
	$user_id=$_POST['user_id'];
endif;

if($_POST['action']=='add'):
	$sql="insert into user(user_id,g_reg_no,name,password,birth_date,email,cell_phone,gender,professional_status,speciality,short_biography,image) values('$user_id','$g_reg_no','$name','$password','$birth_date','$email','$cell_phone','$gender','$professional_status','$speciality','$short_biography','0')";
else:
	$sql="update user SET g_reg_no='$g_reg_no',name='$name',password='$password',birth_date='$birth_date',email='$email',cell_phone='$cell_phone',gender='$gender',professional_status='$professional_status',speciality='$speciality',short_biography='$short_biography' where user_id='".$_POST['user_id']."'";
endif;

mysqli_query($db,$sql);



$dest="profile_pictures/".$user_id.".jpg";


if(isset($_FILES["image"]["name"])):
	if(move_uploaded_file($_FILES["image"]["tmp_name"],$dest)):
		$sqlim="update user set image=1 where user_id='".$user_id."'";
		mysqli_query($db,$sqlim);
	else:
		echo "couldn't upload the file";
	endif;
endif;

echo "successful";

echo "<script language='javascript'>window.alert('Request recieved. You will be notified soon.');location.href = 'signup.html';</script>"

?>