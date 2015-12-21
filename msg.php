
<!--Add Records to Database-->
<?php
	$con = mysqli_connect("localhost","root","coozeman11","cheapo");
	
	
	$recipientIDs=$_POST["recipient"];
	$subject=$_POST["subject"];
	$body=$_POST["message"];
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}
	
$sql2 = "INSERT INTO Message(body, subject, user_id, recipient_ids) 
	VALUES
	(
		'$body',
		'$subject',
		'$userId',
		'$recipientIDs'
	)";
	
	
	if (!mysqli_query($con,$sql1)){
		die('Error: ' . mysqli_error($con));
	}
	echo "<p class='status' id='successful'>One Record has just been added.</p>";
	mysqli_close($con); 	
	
?>
