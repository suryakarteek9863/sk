<!DOCTYPE html>
<html>
<body>
<?php
$fname = $_POST["FName"];
$lname = $_POST["LName"];
$username = $_POST["regemail"];
$password = $_POST["regpass"];

// Create connection
$conn = mysqli_connect("localhost","root","","project3-2"); #<----------------DATABASE NAME
// Check connection

$sql = "insert into studentreg (FName,LName,email,password) values ('$fname','$lname','$username','$password')";
$res = mysqli_query($conn,$sql);

if ($res === TRUE) {
    header("location:main.html");

} else {
       header("location:register.html");

}

$conn->close();
?>


</body>
</html>






