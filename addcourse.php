<?php
session_start();
$user =  $_SESSION['username'];
$role = $_SESSION['role'];


if($role=="user")
{
echo "you are not authorized to access this page";
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
               <li><a href="contact">Contact Us</a></li>                
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
		<div class="center">
			<form name="addcourse" class="form" action="add.php" method="post">
			<br><br><table align="center" name="table">
			<tr><td><b>Add Courses</b><br><br></td></tr>
			<tr><td>Course Name</td><td>:</td><td><input type="text" name="cname"></td></tr>
			<tr><td>Description</td><td>:</td><td><textarea name="cdes" rows="4" cols="17"></textarea></td></tr>
			<tr><td>&nbsp;</td><td>:</td><td><input type="submit" value="Add"></td></tr>
			</table>
			</form>
		</div>
		</div>
	</div>
	
	
</body>
</html>

<?php
}
?>