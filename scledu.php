<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];





$sclinst = $_POST["sinst"];
$sclyear = $_POST["spass"];
$sclperc = $_POST["sperc"];






$conn = mysqli_connect("localhost:3308","root","","project3-2");

$check="select user from school_details where user='$user'";
$checkans=mysqli_query($conn,$check);
$chck=mysqli_fetch_array($checkans);



if(is_null($chck[0]))
{ 

$que4 = "insert into school_details values ('$user','$sclinst','$sclyear','$sclperc')";


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
				else
				{
					$que8 = "update school_details set institute='$sclinst',year='$sclyear',percentage='$sclperc'where user='$user'";



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






