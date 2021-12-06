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

     <div id="templatemo_latest"><a href="#"> ADMIN LOGIN </a></div>

   </div>

   <div id="templatemo_left_menu">

     <div class="templatemo_topmenu">

       <ul>
         <li><a href="admin_profile.php">MEMBERS</a></li>
         <li ><a href="view_product.php">PRODUCTS</a> </li>
         <li class="current"><a href="bidding_details.php">BIDDING DETAILS</a></li>
         <li class="current"><a href="report.php">REPORTS</a></li>
          <li><a href="index.html">LOGOUT</a></li>
       </ul>

      </div>

   </div>

   <div id="templatemo_left_content">

     <h1>PRODUCT  LIST</h1>

     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
         <tr>
           <td width="109"><a href="#">IMAGE</a></td>
           <td width="107"><a href="#">PRODUCT NAME</a></td>
           <td width="88"><a href="#">CATEGORIES</a><a href="a"></a></td>
           <td width="50"><a href="#">PRICE</a></td>
           <!-- <TD width="50"><a href="a">DELETE</a></td> -->
           
          </tr>
           <?php
include 'database.php';

					
$ress="select * from add_products";
$ret=mysqli_query($con,$ress) or die(mysqli_error($con));
   $i=0;
   $x=mysqli_num_rows($ret);
  
while($row=mysqli_fetch_array($ret)) 
{
?>
    <tr>
    
	<td ><img src="upload/<?php echo $row['image']; ?>" alt="" width="50" height="50" /></td>
   
    <td><?php echo $row['p_name']; ?></td>
    <td><?php echo $row['category']; ?></td>
	<td><?php echo $row['price']; ?></td>
   	
    </tr>
     
     
    <?php
	$i++;
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