<!DOCTYPE html>
<html>
<body>
<?php
$fname = $_POST["FName"];
$lname = $_POST["LName"];
$username = $_POST["regemail"];
$password = $_POST["regpass"];

$conn = mysqli_connect("localhost:3308","root","","project3-2");


$que = "select * from studentreg where email = '$username'";
$ans = mysqli_query($conn,$que);
$rows = mysqli_num_rows($ans);
					if($rows != 0)
					{
													
$message = "Username already exists";
						echo "<script type='text/javascript'>alert('$message');</script>";
						

					}

					else
					{
						$sql = "insert into studentreg (FName,LName,email,password) values ('$fname','$lname','$username','$password')";
						$res = mysqli_query($conn,$sql);
						echo("<br> Account created successfully <br>");
						header("location:slogin.html");
					}

$conn->close();
?>


</body>
</html>






