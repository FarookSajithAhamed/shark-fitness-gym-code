<?php
			session_start();
			$username = $_SESSION['username'];

			$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');
		        if(!$con)
					echo "Connection Failed ";
			$result = mysqli_query($con,"delete from `member` where `username` ='$username'");
		    header("Location:Login.html");
?>