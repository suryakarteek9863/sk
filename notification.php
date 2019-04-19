<!DOCTYPE html>
<html>
<head>
	   	<link rel="stylesheet" type="text/css" href="input.css"/>

</head>
<body >
	<table class="container2">

	<?php
session_start();
$user = $_SESSION["user"];
      	$conn = mysqli_connect("localhost:3308","root","","project3-2");

$que="select company,msg from notification where user='$user'";
$ans=mysqli_query($conn,$que);
if(mysqli_num_rows($ans)>0)
            {$i=0;
            	while($ansrow=mysqli_fetch_array($ans))
	    		{
	    			$company[$i]=$ansrow['company'];
	    			$msg[$i]=$ansrow['msg'];

	    			$i++;
	    			

	    			         
	    		}

            }
            for($z=0;$z<sizeof($company);$z++)
            {
            		    		    echo "<tr><td><font size='5'><ul><li>".$company[$z]." : ".$msg[$z]."</li></ul></td></tr>"; 

            }

	    		



$conn->close();
	?>
</table>
</body>
</html>