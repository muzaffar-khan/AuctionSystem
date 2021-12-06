<?php
session_start();
$ses=$_SESSION['name'];
include("database.php");
$id=$_GET['id'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AUCTION SYSTEM</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#templatemo_container #templatemo_left_section #templatemo_left_content #form3 table {
	text-align: left;
}
</style>
</head>

<body>

<div id="templatemo_container">

  <div id="templatemo_left_section">

   <div id="templatemo_left_header">

     <div id="templatemo_left_title">AUCTION SYSTEM</div>

     <div id="templatemo_left_slogan"> Enjoy With Bidding Application...</div>

     <div id="templatemo_latest"><a href="#"> <?php echo "$ses";  ?> </a></div>

   </div>

   <div id="templatemo_left_menu">

     <div class="templatemo_topmenu">

       <ul>
         <li><a href="user_profile.php" >HOME</a></li>
         <li ><a href="add_product.php">ADD PRODUCT</a> </li>
         <li class="current"><a href="category.php">CATEGORIES</a></li>
        
          <li><a href="index.html">LOGOUT</a></li>
       </ul>

      </div>

   </div>

   <div id="templatemo_left_content">

     <h1>BIDDING FOR YOUR PRODUCT</h1>

     <form action="bidding_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
     <?php  
       $s=mysqli_query($con,"select * from add_products where p_id= $id ");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr>
           <td>IMAGE</td>
           <td>:</td>
           <td><img name="file" src="upload/<?php echo $row['image']; ?>" alt="" width="130" height="121" /></td>
         </tr>
         <tr>
           <td>BIDDING DATE</td>
           <td>:</td>
           <td><label for="textfield"></label>
            <input type="date" name="date" id="date" /></td>
         </tr>
         <tr>
           <td width="26%">PRODUCT NAME</td>
           <td width="7%">:</td>
           <td width="67%"><label for="p_name"></label>
            <input name="p_name" type="text" id="p_name" value="<?php echo $row['p_name']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>CATEGORIES</td>
           <td>:</td>
           <td><input name="catry" type="text" id="catry" value="<?php echo $row['category']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>PRICE</td>
           <td>:</td>
           <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>BIDDING COST</td>
           <td>:</td>
           <td><input name="bid_price" type="text" id="bid_price" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="3"><h1>Personal Info</h1></td>
          </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>NAME</td>
           <td>:</td>
           <td><input name="name" type="text" id="name" size="30" /></td>
         </tr>
         <tr>
           <td>E-MAIL</td>
           <td>:</td>
           <td><input name="mail" type="text" id="mail" size="30" /></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>:</td>
           <td><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="3"></textarea></td>
         </tr>
         <tr>
           <td>PONE NO</td>
           <td>:</td>
           <td><input name="ph" type="text" id="ph" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><input type="submit" name="button" id="button" value="Submit" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         
         <?php
}
?>		
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="templatemo_right_section">

    <div id="templatemo_right_top"></div>

    <div id="templatemo_right_search">

      <form id="form1" name="form1" method="post" action="">
      </form>

    </div>
    <div id="templatemo_category">
      

    </div>

    <div id="templatemo_contact"><h2>QUICK CONTACT</h2>

      <p>Tel: 010-100-1001<br />

        Fax: 020-200-2002<br />

        Email: info@AUCTION SYSTEM</p>

    </div>

  </div>

  <div id="templatemo_footer">Copyright ©  Your AUCTION SYSTEM | Designed by <a href="" target="_parent" title="">GROUP-08</a></div>

</div>
</body>
</html>