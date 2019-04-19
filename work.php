<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];
$company1 = $_POST["company1"];
$company2 = $_POST["company2"];
$company3 = $_POST["company3"];
$year1 = $_POST["year1"];
$year2 = $_POST["year2"];
$year3 = $_POST["year3"];

$i=0;

$conn = mysqli_connect("localhost:3308","root","","project3-2");

$check="select user from work where user='$user'";
$checkans=mysqli_query($conn,$check);
$chck=mysqli_fetch_array($checkans);



if(is_null($chck[0]))
{ 

if(isset($_POST["company1"])&& isset($_POST["year1"]))
{
	$que1 = "insert into work values ('$user','$company1','$year1')";
	$ans1 = mysqli_query($conn,$que1);
	$i++;
}

if(isset($_POST["company2"])&& isset($_POST["year2"]))
{
	$que2 = "insert into work values ('$user','$company2','$year2')";
	$ans2 = mysqli_query($conn,$que2);
	$i++;
}

if(isset($_POST["company3"])&& isset($_POST["year3"]))
{
	$que3 = "insert into work values ('$user','$company3','$year3')";
	$ans3 = mysqli_query($conn,$que3);
	$i++;
}




					if($i>0)
					{
							header("location:hobbies.html");
					}}
					else{

						$del="delete from work where user='$user'";
$dele=mysqli_query($conn,$check);



if(isset($_POST["company1"])&& isset($_POST["year1"]))
{
	$que1 = "insert into work values ('$user','$company1','$year1')";
	$ans1 = mysqli_query($conn,$que1);
	$i++;
}

if(isset($_POST["company2"])&& isset($_POST["year2"]))
{
	$que2 = "insert into work values ('$user','$company2','$year2')";
	$ans2 = mysqli_query($conn,$que2);
	$i++;
}

if(isset($_POST["company3"])&& isset($_POST["year3"]))
{
	$que3 = "insert into work values ('$user','$company3','$year3')";
	$ans3 = mysqli_query($conn,$que3);
	$i++;
}
						




					if($i>0)
					{
							header("location:hobbies.html");
					}
					}
						
					

$conn->close();
?>


</body>
</html>






