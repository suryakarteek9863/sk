	<html>
		<head>
			<title>Sign Up Credentials</title>
			<meta charset="UTF8" description="This shows a signup credentials">
		</head>
		<body>
			<center>
		</center>
		<div align="center">
			<br><br><br><br><br>
			<h1> Sign Up</h1>
			<br><br>
			<img src="user.png" style="width:100px;height:100px;"/>
			<br><br>
			<?php
				$fname = $_POST["FName"];
				$lname = $_POST["LName"];
				$username = $_POST["regemail"];
				$password = $_POST["regpass"];
					$conn = mysqli_connect("localhost","root","","project3-2"); #<----------------DATABASE NAME
					$que = "select * from studentreg where username = '$username'";
					$ans = mysqli_query($conn,$que);
					$rows = mysqli_num_rows($ans);
					if($rows>0)
					{	echo("<br> User Already Exist <br>");
						echo("<a href='C:/wamp64/www/project1/register.html'>Create an account again!</a>");
					}
					else
					{
						$exec = "insert into studentreg (FName,LName,email,password) values ('$fname','$lname','$username','$password')";
						$res = mysqli_query($conn,$exec);
						echo("<br> Account created successfully <br>");
						header("location:main.html");
					}
			?>
			<br>
		</body>
	</html>