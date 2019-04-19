<html>

   <head>

   	<link rel="stylesheet" type="text/css" href="input.css"/>
   </head>

  <body> 
  	 <?php
	     session_start();
$user = $_SESSION["user"];
?>
  	<table >
 

<th class="maincontainerhome" style="color: MidNightBlue"><b><i><font size="13"><?php echo "Welcome $user" ?></i></b></font></th>
</font>
</table>
 
<table class="containerbuild">
<tr>
<td><a href="cobj.html"><b><i><font size="7">Build Resume</i></b></font></a>
</td><br><br><br>
</tr>





</table>

<table class="container3">
<tr>
<td><a href="asdf.php"><b><i><font size="7">View Resume</i></b></font></a>
</td><br><br><br>
</tr>
</table>
<form>
<table class="maincontainer2">
<tr>
<td><a href="notification.php"><b><i><font size="4">notifications</i></b></font></a>

</td><br><br><br>
</tr>
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