<?php
include 'database.php';
$b_date=$_POST['date'];
$p_name=$_POST['p_name'];
$cart=$_POST['catry'];
$price=$_POST['price'];
$bid_prc=$_POST['bid_price'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$addrs=$_POST['add'];
$phn=$_POST['ph'];

$ins="insert into bidding values ('','".$b_date."','".$p_name."','".$cart."','".$price."','".$bid_prc."','".$name."','".$mail."','".$addrs."','".$phn."')";
$rel=mysqli_query($con,$ins)or die(mysqli_error($con));
if($rel)
{
	//echo "ok";
	header("Location:user_profile.php");
}
else
{
	echo "Fail";
}
?>