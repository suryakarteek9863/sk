<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];



$cobj = $_POST["cobj"];






$conn = mysqli_connect("localhost:3308","root","","project3-2");


$check="select user from cobj where user='$user'";
$checkans=mysqli_query($conn,$check);
$cobjrow=mysqli_fetch_array($checkans);



if(is_null($cobjrow[0]))
{

$que4 = "insert into cobj values ('$user','$cobj')";

$ans4 = mysqli_query($conn,$que4);


$rows = mysqli_num_rows($ans4);
					if($rows == 0)
					{
													header("location:per.html");


					}
					else
					{
						$message = "Error in data insertion";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}}
					else{
						$que5 = "update cobj set cobj='$cobj' where user='$user'";

$ans5 = mysqli_query($conn,$que5);


$rows = mysqli_num_rows($ans5);
					if($rows == 0)
					{
													header("location:per.html");


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






