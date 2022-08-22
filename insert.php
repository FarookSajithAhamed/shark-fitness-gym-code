<?php
	$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');
	if(!$con){
		echo "Connection Failed <br>";
	}
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$medical = $_POST['medical'];	
	$plan = $_POST['plan'];	
		
	$result = mysqli_query($con,"INSERT INTO member(`firstname`, `lastname`, `email`, `dob` , `gender` ,`contactno` , `address` , `username`,`password` , `medicalCondition` , `membershipType`) VALUES('$fname','$lname','$email','$dob', '$gender','$contact', '$address','$uname','$pwd','$medical','$plan')");
	if($result){
		header("Location:Login.html");
	}
	mysqli_close($con);
?>
