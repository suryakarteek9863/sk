<!DOCTYPE html>
<html>
<body>


	<?php
session_start();
$user = $_SESSION["user"];


$student=$_POST['notiuser'];
$msg=$_POST['text'];
	

$conn = mysqli_connect("localhost:3308","root","","project3-2");

 $que1 = "select Company from recruitreg where Email='$user'";

    $company = mysqli_query($conn,$que1);

 $company_name=mysqli_fetch_array($company);

 $que2 = "insert into notification values ('$student','$company_name[0]','$msg')";

 $notify = mysqli_query($conn,$que2);



 if(mysqli_num_rows($notify)>0)
 {
 	$message = "Notification not sent:-/";
    echo "<script type='text/javascript'>alert('$message');</script>";
 }

 else
 {
 	 	header('location:notify.html');

 	
 }












$conn->close();


	?>

</body>
</html>