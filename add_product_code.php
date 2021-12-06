<?php 
ob_start();
include 'database.php';

$productd_name=$_POST['p_name'];
$category=$_POST['catry'];
$price=$_POST['price'];
$photo=$_FILES["file"]["name"];
$despt=$_POST['desp'];

if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
  }
    if (file_exists("upload/". $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["namee"] . "already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }

$i="insert into add_products values('','".$productd_name."','".$category."','".$price."','".$photo."','".$despt."')";

$vv=mysqli_query($con,$i) or die("error".mysqli_error($con));

if($vv)
{
//echo ("registed");
header("location:add_product.php");
}
else
{
echo ("Not registed");
}
?>