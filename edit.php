<?php
    
	session_start();
		$username = $_SESSION['username'];
	$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');
	if(!$con){
		echo "Connection Failed <br>";
	}
	
	$result = mysqli_query($con,"select * from member where username = '$username'");
	$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Registration.css">
	<title>Updation</title>
</head>
<body align = "center">
	<div class = "box">
		<h1>Profile Updation</h1>
		<form name = "Registration_Form" method="post" action="update.php">
			<b>First Name : </b><input type="text" name="fname" value = "<?php echo $row['firstname'];?>" required><br>
			<b>Last Name : </b><input type="text" name="lname" value = "<?php echo $row['lastname'];?>"  required><br>
			<b>Email ID : </b><input type="email" name="email" value = "<?php echo $row['email'];?>" required><br><br>
			<b>Date of Birth : </b><input type="date" name="dob" value = "<?php echo $row['dob'];?>"  required><br>
			<b>Gender: </b>
			  <input type="radio" name="gender" value = "m" <?php echo $row['gender']=="m"? 'checked':'';?> required> Male
			  <input type="radio" name="gender" value = "f"<?php echo $row['gender']=="f"? 'checked':'';?>required> Female<br><br>
			<b>Contact No :</b><input type="tel" name="contact" pattern="[0-9]{10}" value="<?php echo $row['contactno'];?>" required><br><br>		
			<b>Address: </b><textarea name = "address" rows="2" cols="20" required> <?php echo $row['address'];?> </textarea><br><br>
			<b>Password: </b><input type="password" name="pwd" value = "<?php echo $row['password'];?>"  required><br><br>
			<b>Medical Conditions: </b><textarea name = "medical" rows="2" cols="20" required>
				<?php echo $row['medicalCondition'];?></textarea><br><br>
			<b>Membership plans : </b>
			<input type="radio" name="plan" value= "monthly" <?php echo $row['membershipType']=="monthly"? 'checked':'';?>  required>Monthly
			<input type="radio" name="plan" value= "annual" <?php echo $row['membershipType']=="annual"? 'checked':'';?>  required>Annual<br><br>
			<input type="submit" name="submit" value="Update">

		</form>
	</div>
</body>
</html>