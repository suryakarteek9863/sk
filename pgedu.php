<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];
$pginst = $_POST["pinst"];
$pgyear = $_POST["ppass"];
$pgperc = $_POST["pperc"];

$ginst = $_POST["ginst"];
$gyear = $_POST["gpass"];
$gperc = $_POST["gperc"];

$intinst = $_POST["iinst"];
$intyear = $_POST["ipass"];
$intperc = $_POST["iperc"];

$sclinst = $_POST["sinst"];
$sclyear = $_POST["spass"];
$sclperc = $_POST["sperc"];






$conn = mysqli_connect("localhost:3308","root","","project3-2");

$check="select user from pg_details where user='$user'";
$checkans=mysqli_query($conn,$check);
$chck=mysqli_fetch_array($checkans);



if(is_null($chck[0]))

{ 
$que1 = "insert into pg_details values ('$user','$pginst','$pgyear','$pgperc')";
$que2 = "insert into grad_details values ('$user','$ginst','$gyear','$gperc')";
$que3 = "insert into inter_details values ('$user','$intinst','$intyear','$intperc')";
$que4 = "insert into school_details values ('$user','$sclinst','$sclyear','$sclperc')";


$ans1 = mysqli_query($conn,$que1);
$ans2 = mysqli_query($conn,$que2);
$ans3 = mysqli_query($conn,$que3);
$ans4 = mysqli_query($conn,$que4);


$rows = mysqli_num_rows($ans4);
					if($rows == 0)
					{

							header("location:tech.html");

					}

					else
					{
						$message = $rows;
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}
				}
				else{
					$que5 = "update pg_details set instiutute='$pginst',year='$pgyear',percentage='$pgperc'where user='$user'";
$que6 = "update grad_details set institute='$ginst',year='$gyear',percentage='$gperc'where user='$user'";
$que7 = "update inter_details set institute='$intinst',year='$intyear',percentage='$intperc'where user='$user'";
$que8 = "update school_details set institute='$sclinst',year='$sclyear',percentage='$sclperc'where user='$user'";


$ans5 = mysqli_query($conn,$que5);
$ans6 = mysqli_query($conn,$que6);
$ans7 = mysqli_query($conn,$que7);
$ans8 = mysqli_query($conn,$que8);


$rows = mysqli_num_rows($ans8);
					if($rows == 0)
					{

							header("location:tech.html");

					}

					else
					{
						$message = $rows;
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}

				}

$conn->close();
?>


</body>
</html>






