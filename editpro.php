<?php
session_start();
$user =  $_SESSION['username'];
$role = $_SESSION['role'];
$file = $_GET['image'];
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
               <li><a href="index.php">Home</a></li>
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
		
	
</body>
</html>

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
		
	
</body>
</html>
<?php
}
?>
<div class="center">
<?php
include 'connection.php';

include $file;

$sql = "SELECT first_name as first_name,last_name as last_name,profile as profile from users WHERE username='$user'";
$res = mysql_query($sql);
echo '<br><br><table width="100%"><form name="update" action="update.php" method="post">';
while($r=mysql_fetch_array($res,MYSQL_ASSOC))
{
echo '<tr><td>Name</td><td>:</td><td><input type="text" name="first_name" value="'.$r['first_name'].'"></td></tr>
<tr><td>Last Name</td><td>:</td><td><input type="text" name="last_name" value="'.$r['last_name'].'"></td></tr>
<tr><td>Profile</td><td>:</td><td><input type="text" name="profile" value="'.$r['profile'].'"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Update"></td></tr>';
}
echo '</form>';
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
<tr><td><br>Update Profile Picture</td></tr>
<tr><td><br><input type="file" name="file" id="file">
<input type="submit" value="upload"></td></tr>
</form></table>
</div>


</body>
</html>