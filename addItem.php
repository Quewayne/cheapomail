
<!--Add Records to Database-->
<?php
	$con = mysqli_connect("localhost","root","coozeman11","cheapo");
	$fname=$_REQUEST["fname"];
	$lname=$_REQUEST["lname"];
	$password=$_REQUEST["password"];
	$username=$_REQUEST["username"];
	
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}
	

	$sql1 = "INSERT INTO User(Firstname, Lastname, Password, Username) 
	VALUES
	(
		'$fname',
		'$lname',
		'$password',
		'$username'
	)";
	
	
	
	if (!mysqli_query($con,$sql1)){
		die('Error: ' . mysqli_error($con));
	}
	echo "<p class='status' id='successful'>One Record has just been added.</p>";
	mysqli_close($con); 	
	
?>
