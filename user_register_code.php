<?php 
ob_start();
include 'database.php';

$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$email=$_POST['mail'];
$pass=$_POST['pwd'];
$dob=$_POST['dob'];
$gender=$_POST['gen'];
$address=$_POST['add'];
$phne=$_POST['ph'];

$i="insert into user_registration values('','".$first_name."','".$last_name."','".$email."','".$pass."','".$dob."','".$gender."','".$address."','".$phne."')";

$vv=mysqli_query($con,$i) or die("error".mysqli_error($con));

if($vv)
{
//echo ("registed");
header("location:user.php");
}
else
{
echo ("Not registed");
}
?>