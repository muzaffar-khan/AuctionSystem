<?php
session_start(); 
include("database.php");
$ses=$_SESSION['user'] 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>INFORMATION SHARING SYSTEM</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
<script type="text/javascript" src="js/maxheight.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!--[if lt IE 7]>
	<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		ie_png.fix('.png');
	</script>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1" onLoad="new ElementMaxHeight();">
<div class="tail-bottom">
	<div id="main" class="zerogrid">
<!-- header -->
		<header>
			<div class="nav-box">
				<nav>
					<ul class="fright">
						<li><a href="index.html"><img src="images/pic-home-act.gif"></a></li>
						<li><a href="contact-us.html"><img src="images/pic-mail.gif"></a></li>
						<li><a href="sitemap.html"><img src="images/pic-sitemap.gif"></a></li>
					</ul>
					<ul class="normal-menu">
						<li class="current"><a href="admin_page.php">Home</a></li>
						<li><a href="top_idea_admin.php">Top ideas</a></li>
						<li><a href="member_list.php">Member List </a></li>
                         <li><a href="report.php">Report</a></li>
						<li><a href="index.php">logout</a></li>
						
					</ul>
					<div class='response-menu'>
						<div><img src='images/menu2.png'/></div>
						<select onchange="location=this.value">
							<option></option>
							<option value="index.html">Home</option>
							<option value="about-us.html">About</option>
							<option value="articles.html">Articles</option>
							<option value="contact-us.html">Contacts</option>
							<option value="sitemap.html">SiteMap</option>
						</select>
					</div>
				</nav>
				
			</div>
			<h1><a href="index.html"><img src="images/logo.jpg" /></a></h1>
			<form action="" id="search-form">
				<fieldset>
				<input type="text">
				<a href="#" onclick="document.getElementById('search-form').submit()"><img src="images/button-search.gif"></a>
				</fieldset>
			</form>
		</header>
		<div class="wrapper indent">
<!-- content -->
			<section id="content" class="col-3-4_new">
				<div id="slogan"><img src="images/slogan.jpg"></div>
			  <div class="inside">
			    <h2><span><br>
            
		        My </span>Information</h2>
	  				
                    <table width="100%" border="0" cellspacing="5">
  <tr>
  <td width="11%" height="22"><strong>Date</strong></td>
    <td width="10%" height="22"><strong>Staft ID</strong></td>
    <td width="13%"><strong>Email </strong></td>
    <td width="10%"><strong>Branch</strong></td>
    <td width="16%"><strong>Topics</strong></td>
    <td width="32%"><strong>Ideas</strong></td>
    <td width="8%"><strong>Rating</strong></td>
  </tr>
   <?php
   $date=$_POST['date'];
$select="SELECT * FROM idea_posting where date='$date' ";
$qry=mysqli_query($con,$select);
$row=mysqli_num_rows($qry);
$i=0;
while ($i<$row)
{
$id=mysqli_result($qry,$i,"idea_id");
$date=mysqli_result($qry,$i,"date");
$staff_id=mysqli_result($qry,$i,"Staff_ID");
$name=mysqli_result($qry,$i,"Email");
$brch=mysqli_result($qry,$i,"Branch");
$topic=mysqli_result($qry,$i,"Topics");
$idea=mysqli_result($qry,$i,"Description");
$count=mysqli_result($qry,$i,"comment");
?>
    <tr>
   <td height="24" class="mem_list"><?php echo $date; ?></td>
	<td height="24" class="mem_list"><?php echo $staff_id; ?></td>
    <td class="mem_list"><?php echo $name; ?></td>
    <td class="mem_list"><?php echo $brch; ?></td>
    <td class="mem_list"><?php echo $topic; ?></td>
    <td class="mem_list"><?php echo $idea; ?></td>
    <td class="mem_list"><?php echo $count; ?></td>
    </tr>
    <?php
	$i++;
	}
	?>
</table>

                </div>
				<div class="wrapper">
					<article class="col-1-2"></article>
					<article class="col-1-2"></article>
				</div>
			</section>
<!-- aside -->
			<aside class="col-1-4"></aside>
		</div>
<!-- footer -->
		<footer>
			<div class="inside">designed by <a rel="nofollow" href="a" class="new_window">Abile Technologies</a><br/>
			  <br>
Links:- <a href="index.php">Home</a> | <a href="about_us.php">About us</a> | <a href="service.php">Services</a> | <a href="top_idea.php">Top ideas</a> | <a href="admin.php">Admin</a>
			</div>
		</footer>
	</div>
</div>
</body>
</html>