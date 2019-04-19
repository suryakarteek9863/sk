<!DOCTYPE html>
<html>
<body>
<?php
$username = $_POST["uname"];
$password = $_POST["pass"];
$check=$_POST["check"];
session_start();
$_SESSION["user"] = $username;


$conn = mysqli_connect("localhost:3308","root","","project3-2");

if(isset($check))
{
	$que = "select * from recruitreg where Email = '$username' and  Password = '$password'";
$ans = mysqli_query($conn,$que);
$rows = mysqli_num_rows($ans);
					if($rows === 1)
					{

							header("location:filter.html");

					}

					else
					{
						header("location:invalid.html");

					}
}
else{


$que = "select * from studentreg where Email = '$username' and  Password = '$password'";
$ans = mysqli_query($conn,$que);
$rows = mysqli_num_rows($ans);
					if($rows === 1)
					{

							header("location:resumehome.php");

					}

					else
					{
												header("location:invalid.html");

						
					}}

$conn->close();
?>


</body>
</html>






