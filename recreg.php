<!DOCTYPE html>
<html>
<body>
<?php
$fname = $_POST["FName"];
$lname = $_POST["LName"];
$username = $_POST["regemail"];
$password = $_POST["regpass"];
$company = $_POST["company"];


$conn = mysqli_connect("localhost:3308","root","","project3-2");


$que = "select * from recruitreg where Email = '$username' or Company = '$company'";
$ans = mysqli_query($conn,$que);
$rows = mysqli_num_rows($ans);
					if($rows != 0)
					{
													
						$message = "Username or Company name already exists";
						echo "<script type='text/javascript'>alert('$message');</script>";
						

					}

					else
					{
				$sql = "insert into recruitreg (FName,LName,Company,Email,Password) values ('$fname','$lname','$company','$username','$password')";						$res = mysqli_query($conn,$sql);
						header("location:main.html");
					}

$conn->close();
?>


</body>
</html>






