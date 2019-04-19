<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$user = $_SESSION["user"];
$fname = $_POST["FName"];
$lname = $_POST["LName"];
$edu = $_POST["edu"];
$gender = $_POST["sex"];
$DOB = $_POST["DOB"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$city1 = $_POST["city"];

$city=trim($city1," ");

$conn = mysqli_connect("localhost:3308","root","","project3-2");

$check="select user from personal_details where user='$user'";
$checkans=mysqli_query($conn,$check);
$chck=mysqli_fetch_array($checkans);



if(is_null($chck[0]))
{ 

$que = "insert into personal_details values ('$user','$fname','$lname','$gender','$DOB','$email','$mobile','$address','$city')";
$ans = mysqli_query($conn,$que);
$rows = mysqli_num_rows($ans);
					if($rows == 0)
					{

						if($edu == "P.G")
						{
							header("location:pgedu.html");

						}
						elseif ($edu == "Graduation") {
							header("location:gradedu.html");
							
						}
						elseif ($edu == "Intermediate") {
							header("location:interedu.html");
							
						}
						else{
							header("location:scledu.html");
						}
					}

					else
					{
						$message = "INVALID details";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}
				}
				else
				{echo "update";
					$que1 = "update personal_details  
					set fname='$fname',lname='$lname',gender='$gender',dob='$DOB',email='$email',mobile='$mobile',address='$address',city='$city' 
					where user='$user' ";
$ans2 = mysqli_query($conn,$que1);
$rows2 = mysqli_num_rows($ans2);
					if($rows2 == 0)
					{

						if($edu == "P.G")
						{
							header("location:pgedu.html");

						}
						elseif ($edu == "Graduation") {
							header("location:gradedu.html");
							
						}
						elseif ($edu == "Intermediate") {
							header("location:interedu.html");
							
						}
						else{
							header("location:scledu.html");
						}
					}

					else
					{
						$message = "INVALID details";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					}
				}

$conn->close();


?>




</body>
</html>






