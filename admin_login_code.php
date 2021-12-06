<?php

include 'database.php';

 $admin=$_POST['name'];
 $password=$_POST['pwd']; 
 

   $a="select * from admin WHERE  admin='$admin' and pwd='$password'"; 
    $res=mysqli_num_rows(mysqli_query($con,$a));		 																																																													
    if($res)
    {
    //echo "ok";
    header("location:admin_profile.php");
    } 
    
    else
    {
    echo "invalid user id and password";
    }
?>