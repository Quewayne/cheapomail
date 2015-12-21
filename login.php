<?php
$con = mysqli_connect("localhost","root","coozeman11","cheapo");
session_start(); 

	$password=$_REQUEST["password"];
	$username=$_REQUEST["username"];
$_SESSION['currentUser'] = $userName;
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}
if($username == 'admin' && $password =='admin'){
			
		header("location: admin.php");
		exit();
	}

if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}

?>
