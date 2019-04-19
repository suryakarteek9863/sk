<HTML>
<HEAD>
		<style>



table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width:40%;
  padding-left: 30%;
  
}

th, td {
  border: 1px solid black;
  border-collapse: collapse;
    padding:30px;
}
</style>
</HEAD>
<BODY >


	     <?php
	     
	     	$user=$_POST["resuser"];
	     error_reporting(0);

      	$conn = mysqli_connect("localhost:3308","root","","project3-2");

      	
	    
//Queries:

	    //personal details
	    $per = "select fname,lname,address,city,mobile,email from personal_details where user = '$user'";

	    //educational qualification
	    $pg_edu = "select institute,year,percentage from pg_details where user='$user'";

	    $grad_edu = "select institute,year,percentage from grad_details where user='$user'";

	    $inter_edu = "select institute,year,percentage from inter_details where user='$user'";

	    $school_edu = "select institute,year,percentage from school_details where user='$user'";
	    $techskills = "select tskills from techskills where user='$user'";
	    $projects = "select projects from projects  where user='$user'";
	    $hobbies = "select hobbies from hobbies  where user='$user'";
	    $achievements = "select certification from certi  where user='$user'";
	    $cobj="select cobj from cobj  where user='$user'";

	    $declare = "select decl from decl where user='$user'";
	    $work = "select company,years from work where user='$user'";
//Executions:


		//cobj
	    $cobjj=mysqli_query($conn,$cobj);

	    //personal_details:
	    $per_rows = mysqli_query($conn,$per);

	    //Educational qualifications:
	    $pg_rows = mysqli_query($conn,$pg_edu);
	    $grad_rows = mysqli_query($conn,$grad_edu);
	    $inter_rows = mysqli_query($conn,$inter_edu);
	    $school_rows = mysqli_query($conn,$school_edu);

	    //technical skills:
	    $tech_rows = mysqli_query($conn,$techskills);

        //Projects:
        $project_rows = mysqli_query($conn,$projects);

        //hobbies:
        $hobbies_rows = mysqli_query($conn,$hobbies);

        //achieve:

        $achievement_rows = mysqli_query($conn,$achievements);

        //declaration
        $decl_rows = mysqli_query($conn,$declare);

        //work experience:
        $work_rows = mysqli_query($conn,$work);








        //personal details print
	    while($perrow=mysqli_fetch_array($per_rows))
	    	{
	    	   $fname=$perrow['fname'];
	    	   $lname=$perrow['lname'];
	    	   $address=$perrow['address'];
	    	   $city=$perrow['city'];
	    	   $mobile=$perrow['mobile'];
	    	   $email=$perrow['email'];


		       echo "<font size='5'><h1 align='center'>".$fname." ".$lname."</h1>";

		       echo "<font size='5'><p align='center'>".$address."</p>";
		       echo "<font size='5'><p align='center'>".$city."</p>";
		       echo "<font size='5'><p align='center'>".$mobile."</p>";
		       echo "<font size='5'><p align='center'>".$email."</p><hr>";
		   }

		                 echo "<h3>Career Objective:</h3>";   		

    if(mysqli_num_rows($cobjj)>0)
            {
            	while($cobjrow=mysqli_fetch_array($cobjj))
	    		{
	    			$co=$cobjrow['cobj'];
	    			

	    			echo "<font size='5'><p>".$co."</p>";
	    			         
	    		}

            } 
		    



		   echo "<font size='5'><h3>Education Details:</h3>";

		   echo "<table border='1'>";
            echo "<tr>";
                echo "<th><h3>Qualification</h3></th>";
                echo "<th><h3>School/College</h3></th>";
                echo "<th><h3>Year</h3></th>";
                echo "<th><h3>Score</h3></th>";
            echo "</tr>";

           if(mysqli_num_rows($pg_rows)>0)
            {
            	while($pgrow=mysqli_fetch_array($pg_rows))
	    		{
	    			$pginstname=$pgrow['institute'];
	    			$pgyear=$pgrow['year'];
	    			$pgper=$pgrow['percentage'];


	    			echo "<tr>";
	    			echo "<td><font size='5'>Post Graduation</td>";	
	    			echo "<td><font size='4'>".$pginstname."</td>";	
	    			echo "<td><font size='4'>".$pgyear."</td>";	
	    			echo "<td><font size='4'>".$pgper."</td>";	
					echo "</tr>";
	    		}

            }

               if(mysqli_num_rows($grad_rows)>0)
            {
            	while($gradrow=mysqli_fetch_array($grad_rows))
	    		{
	    			$gradinstname=$gradrow['institute'];
	    			$gradyear=$gradrow['year'];
	    			$gradper=$gradrow['percentage'];


	    			echo "<tr>";
	    			echo "<td><font size='5'>Graduation</td>";	
	    			echo "<td><font size='4'>".$gradinstname."</td>";	
	    			echo "<td><font size='4'>".$gradyear."</td>";	
	    			echo "<td><font size='4'>".$gradper."</td>";	
					echo "</tr>";
	    		}

            }


   if(mysqli_num_rows($inter_rows)>0)
            {
            	while($interrow=mysqli_fetch_array($inter_rows))
	    		{
	    			$interinstname=$interrow['institute'];
	    			$interyear=$interrow['year'];
	    			$interper=$interrow['percentage'];


	    			echo "<tr>";
	    			echo "<td><font size='5'>Intermediate</td>";	
	    			echo "<td><font size='4'>".$interinstname."</td>";	
	    			echo "<td><font size='4'>".$interyear."</td>";	
	    			echo "<td><font size='4'>".$interper."</td>";	
					echo "</tr>";
	    		}

            }


   if(mysqli_num_rows($school_rows)>0)
            {
            	while($schoolrow=mysqli_fetch_array($school_rows))
	    		{
	    			$schoolinstname=$schoolrow['institute'];
	    			$schoolyear=$schoolrow['year'];
	    			$schoolper=$schoolrow['percentage'];


	    			echo "<tr>";
	    			echo "<td><font size='5'>School</td>";	
	    			echo "<td><font size='4'>".$schoolinstname."</td>";	
	    			echo "<td><font size='4'>".$schoolyear."</td>";	
	    			echo "<td><font size='4'>".$schoolper."</td>";	
					echo "</tr>";
					echo "</table><br>";
	    		}

            }

		   		

    if(mysqli_num_rows($tech_rows)>0)
            {echo "<font size='5'><h3>Technical Skills:</h3>";   		

            	while($techrow=mysqli_fetch_array($tech_rows))
	    		{
	    			$skills=$techrow['tskills'];
	    			$skill_list=explode(",",$skills);

	    			for($i=0;$i<sizeof($skill_list);$i++)
	    			{
	    				echo "<font size='5'><ul><li>".$skill_list[$i]."</li></ul></font>"; 
	    			}
	    			         
	    		}

            }



    if(mysqli_num_rows($project_rows)>0)
            {echo "<font size='5'><h3>Projects:</h3>";   		

            	while($projectrow=mysqli_fetch_array($project_rows))
	    		{
	    			$projects=$projectrow['projects'];
	    			$project_list=explode(",",$projects);

	    			for($i=0;$i<sizeof($project_list);$i++)
	    			{
	    				echo "<font size='5'><ul><li>".$project_list[$i]."</li></ul>"; 
	    			}
	    			         
	    		}

            }     

               		

    if(mysqli_num_rows($achievement_rows)>0)
            {echo "<h3>Achievements:</h3>";
            	while($achievementrow=mysqli_fetch_array($achievement_rows))
	    		{
	    			$achievements=$achievementrow['certification'];
	    			$achievement_list=explode(",",$achievements);

	    			for($i=0;$i<sizeof($achievement_list);$i++)
	    			{
	    				echo "<font size='5'><ul><li>".$achievement_list[$i]."</li></ul>"; 
	    			}
	    			         
	    		}

            } 


                 

    if(!is_null($work_rows))
            {echo "<h3>Work experience:</h3>";
            	    $l=0;
				while($workrow=mysqli_fetch_array($work_rows))
				{	
    				$result4[$l]=$workrow['company'];
    				$result5[$l]=$workrow['years'];

    				if($result5[$l]=='1')
    				{
    					echo "<font size='5'><ul><li><p>".$result4[$l]." :". $result5[$l]  ." year<p></li>
    				</ul>"; 
    					}
    				else
    				{
    					echo "<font size='5'><ul><li><p>".$result4[$l]." :". $result5[$l]  ." years<p></li>
    				</ul>";
    				}
    				


    				
    				$l++;

				}


	    			         
	        } 


      
   
				   
        echo "<br><br><h3>Hobbies:</h3>";   		

    if(mysqli_num_rows($hobbies_rows)>0)
            {
            	while($hobbierow=mysqli_fetch_array($hobbies_rows))
	    		{
	    			$hobbies=$hobbierow['hobbies'];
	    			$hobbie_list=explode(",",$hobbies);

	    			for($i=0;$i<sizeof($hobbie_list);$i++)
	    			{
	    				echo "<font size='5'><ul><li>".$hobbie_list[$i]."</li></ul>"; 
	    			}
	    			         
	    		}

            } 
      
              echo "<h3>Declaration:</h3>";   		

    if(mysqli_num_rows($decl_rows)>0)
            {
            	while($declrow=mysqli_fetch_array($decl_rows))
	    		{
	    			$declare=$declrow['decl'];
	    			

	    			echo "<font size='5'><p>".$declare."</p>";
	    			         
	    		}

            } 
        

       




$conn->close();

      ?>    

</BODY>
</HTML> 