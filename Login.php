<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	
	session_start();
	$_SESSION['username'] = $_POST['uname'];
	$username = $_POST['uname'];
	$password = $_POST['pwd'];

	$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);
	
	$result = mysqli_query($con, "select * from member where username = '$username' and password = '$password'") or die("Failed to query database".mysqli_error($con));

	$row = mysqli_fetch_array($result);

	if(is_null($row)){
		 echo '<script type = "text/javascript"> alert("Incorrect username or password !!")</script>';
		 echo '<script>window.location = "Login.html"</script> ';

	}

	else if($row['username']== $username && $row['password'] == $password){
				header("Location:select.php");
	}
	

?>



</body>
</html>

