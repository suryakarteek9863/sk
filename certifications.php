<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];




$certi = $_POST["certi"];






$conn = mysqli_connect("localhost:3308","root","","project3-2");


$check="select user from certi where user='$user'";
$checkans=mysqli_query($conn,$check);
$chck=mysqli_fetch_array($checkans);



if(is_null($chck[0]))
{ 
$que4 = "insert into certi values ('$user','$certi')";

$ans4 = mysqli_query($conn,$que4);


$rows = mysqli_num_rows($ans4);
					if($rows == 0)
					{

							header("location:projects.html");

					}

					else
					{
						$message = "Error in data insertion";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}}

					else
					{
						$que5 = "update certi set certification='$certi' where user='$user'";

$ans5 = mysqli_query($conn,$que5);


$rows = mysqli_num_rows($ans5);
					if($rows == 0)
					{

							header("location:projects.html");

					}

					else
					{
						$message = "Error in data insertion";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}
					}

$conn->close();
?>


</body>
</html>






