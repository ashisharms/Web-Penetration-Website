<?php
session_start();
$user =  $_SESSION['username'];
$role = $_SESSION['role'];
$cid = $_GET['cid'];

include 'connection.php';

if($role=="user")
{
?>
<html>
<head>
<title>Pro Design</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="header">
	<div class="logo" align="center">
	<div id="txt"><font size="7px"><big><b>Kyrion</b></big></font></div>
	<div id="txt2"><h1>Digital Security</h1></div>
	</div>
		<div class="menu">
			<ul>
               <li><a href="home.html">Home</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="service.html">Services</a></li>
               <li><a href="contact.html">Contact Us</a></li>                
			</ul>
		</div>
	</div>
	<div id="empty"></div>
	<div class="opn">
			<center><ul>
			<li><a href="home.php?image=image.php">Profile</a><li>
			<li><a href="editpro.php?image=image.php">Edit Profile</a><li>
			<li><a href="courses.php">Courses</a><li>
			<li><a href="editcourse.php">Edit Courses</a><li>
			<li><a href="vcur.php">Download</a><li>
			<li><a href="logout.php">Logout</a><li>
			</ul></center>
		</div>
	<div id="img" style="background:url(./images/water.jpg);">
		
		

<?php
}
else
{
?>
<html>
<head>
<title>Pro Design</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="header">
	<div class="logo" align="center">
	<div id="txt"><font size="7px"><big><b>Kyrion</b></big></font></div>
	<div id="txt2"><h1>Digital Security</h1></div>
	</div>
		<div class="menu">
			<ul>
               <li><a href="home.html">Home</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="service.html">Services</a></li>
               <li><a href="contact.html">Contact Us</a></li>                
			</ul>
		</div>
	</div>
	<div id="empty"></div>
	<div class="opn">
			<center><ul>
			<li><a href="home.php?image=image.php">Profile</a><li>
			<li><a href="editpro.php?image=image.php">Edit Profile</a><li>
			<li><a href="courses.php">Courses</a><li>
			<li><a href="editcourse.php">Edit Courses</a><li>
			<li><a href="addcourse.php">Add Course</a><li>
			<li><a href="curriculum.php">Upload curriculum</a><li>
			<li><a href="logout.php">Logout</a><li>
			</ul></center>
		</div>
	<div id="img" style="background:url(./images/water.jpg);">

<?php
}

$sql = "SELECT cname as cname,cdes as cdes from courses WHERE id=$cid";
$res = mysql_query($sql);

while($r=mysql_fetch_array($res,MYSQL_ASSOC))
{
echo '<form name="login" action="editcour.php" method="post">
<div class="center">
<br><br><table align="center">
<tr><td><b>Edit Courses</b><br><br></td></tr>
<tr><td>Course Name</td><td>:</td><td><input type="text" name="cname" value="'.$r['cname'].'"></td></tr>
<tr><td>Description</td><td>:</td><td><textarea name="cdes" rows="4" cols="17">'.$r['cdes'].'</textarea></td></tr>
<input type="hidden" name="id" value="'.$cid.'">
<tr><td>&nbsp;</td><td>:</td><td><input type="submit" value="Edit"></td></tr>
</table>
</form>

</div>';
}
?>


