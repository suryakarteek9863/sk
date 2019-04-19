<!DOCTYPE html>
<html>
<head>
	<style>
.close{
  position: absolute;
   margin-left: 1400px;
   margin-bottom: 1000px;
  max-width: 800px;
  padding: 16px;
  background:white;
  opacity: 0.8;
  filter: alpha(opacity=90);

  border-radius: 12px;
}

.container2{
	 position: absolute;
  margin-left:530px; 
  margin-top: 100px;
  max-width: 800px;
  padding: 16px;
  background:white;
	opacity: 0.9;
  filter: alpha(opacity=90);

  border-radius: 12px;
}
.container1{
	 position: absolute;
  margin-left:30px; 
  margin-top: 170px;
  max-width: 800px;
  padding: 16px;
  background:white;
	opacity: 0.9;
  filter: alpha(opacity=90);

  border-radius: 12px;

}
.first{
    border-radius: 12px;
}
body{
             background-image:url(recbg.jpg);

             background-repeat:no-repeat;
             background-size:cover;
            }
</style>
</head>








<body>
	<table class="container1">
	<form method="POST" action="demoview.php">
	<?php
session_start();
$user = $_SESSION["user"];
$res = $_SESSION["res"];


foreach ($res as $key => $value) {

    # code...
   echo "<tr><td>".$res[$key]."<br><br><br></td></tr>";
   
}
echo "</table>";

echo "	<table class='container2'>
<tr><td><input type='text'class='first' placeholder='username' name='resuser'/></td></tr>";
echo "<tr><td><input type='submit' class='first' value='get resume'></td></tr>";













?>
</form>
<form action="notify.php" method="POST">
<?php

echo "<br><br><tr><td><input type='text' class='first' placeholder='username' name='notiuser'/></td></tr>";
echo "<br><br><tr><td><textarea cols='40' class='first' placeholder='Enter the message' rows='5' name = 'text' required></textarea></td></tr>";

echo "<tr><td><input type='submit' class='first' value='notify'></td></tr>";















?>




</table>

    
<table class="close">
  <tr>
<td><a href="close.php"><b><i><font size="3">logout</i></b></font></a>

</td><br><br><br>
</tr>
</table>








</form>
</body>
</html>