<html>
<body>
<?php

session_start();
$user = $_SESSION["user"];
error_reporting(0);
$clang = $_POST["c"];
$cpp = $_POST["c++"];
$java = $_POST["java"];
$python = $_POST["python"];
$sql = $_POST["sql"];

$work =$_POST["years"];
$cgpa = $_POST["marks"];



$conn = mysqli_connect("localhost:3308","root","","project3-2");

if(isset($clang))
{
    $que1 = "select user from techskills where tskills like '%c%'";

    $ans1 = mysqli_query($conn,$que1);

    $j=0;
while($crow=mysqli_fetch_array($ans1))
{
    $result1[$j]=$crow['user'];
    $j++;
}

}

if(isset($cpp))
{
    $que2 = "select user from techskills where tskills like '%c++%'";

    $ans2 = mysqli_query($conn,$que2);

$i=0;
while($cpprow=mysqli_fetch_array($ans2))
{
    $result2[$i]=$cpprow['user'];
    $i++;
}

}

if(isset($java))
{
    $que3 = "select user from techskills where tskills like '%java%'";

    $ans3 = mysqli_query($conn,$que3);

    $k=0;
while($javarow=mysqli_fetch_array($ans3))
{
    $result3[$k]=$javarow['user'];
    $k++;
}
}

if(isset($python))
{
    $que4 = "select user from techskills where tskills like '%python%'";

    $ans4 = mysqli_query($conn,$que4);
    
    $l=0;
while($pythonrow=mysqli_fetch_array($ans4))
{
    $result4[$l]=$pythonrow['user'];
    $l++;
}
}

if(isset($sql))
{
    $que5 = "select user from techskills where tskills like '$sql'";

    $ans5 = mysqli_query($conn,$que5);

    $m=0;
while($sqlrow=mysqli_fetch_array($ans5))
{
    $result5[$m]=$sqlrow['user'];
    $m++;
}
}


if(!is_null($result1))
{
    $test=$result1;
}
else if(!is_null($result2))
{
    $test=$result2;
}
else if(!is_null($result3))
{
    $test=$result3;
}
else if(!is_null($result4))
{
    $test=$result4;
}
else if(!is_null($result5))
{
    $test=$result5;
}

if(!is_null($test))
{
    if(!is_null($result1))
    {
        $test=array_intersect($test,$result1);
    }

    if(!is_null($result2))
    {
        $test=array_intersect($test,$result2);
    }
    if(!is_null($result3))
    {
        $test=array_intersect($test,$result3);
    }
    if(!is_null($result4))
    {
        $test=array_intersect($test,$result4);
    }
    if(!is_null($result5))
    {
        $test=array_intersect($test,$result5);
    }


}






if(isset($work))
{
    $view = "create view experience as select user,sum(years) as experience from work group by user";

    $view1 = mysqli_query($conn,$view);
    
    $users = "select user from experience where experience>='$work' ";

    $experience=mysqli_query($conn,$users);

     $i=0;
    while($workrow = mysqli_fetch_array($experience))
    {
        $work_result[$i]=$workrow['user'];
        $i++;
    }

    $del_view= "drop view experience";
    $result_del=mysqli_query($conn,$del_view);


}


if(isset($cgpa))
{
    $que1 = "select user from grad_details where percentage>'$cgpa'";

    $ans1 = mysqli_query($conn,$que1);

    $j=0;
while($cgparow=mysqli_fetch_array($ans1))
{
    $cgpa_result[$j]=$cgparow['user'];
    $j++;
}


}

if(!is_null($test))
{
    $res=$test;

}
else if(!is_null($work_result))
{
    $res=$work_result;


}
else if(!is_null($cgpa_result))
{
    $res=$cgpa_result;
}

if(!is_null($res))
{
    if(!is_null($test))
    {
        $res=array_intersect($res,$test);

    }

    if(!is_null($work_result))
    {
        $res=array_intersect($res,$work_result);



    }
    if(!is_null($cgpa_result))
    {
        $res=array_intersect($res,$cgpa_result);
    }
}

foreach ($res as $key => $value) {
    # code...
    if(empty($value))
    {
        unset($res[$key]);
    }
}

                     if(!is_null($res))
                    {

                            header("location:filterlist.php");

                    }

                    else
                    {
                        $message = "Select any filter";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        


                    }
                                            

                    

/*foreach ($res as $key => $value) {
    # code...
   echo $res[$key];
}*/


$_SESSION["res"]=$res;




$conn->close();
?>


</body>
</html>






