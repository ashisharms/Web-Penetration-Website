<?php
session_start();
$user =  $_SESSION['username'];
$role = $_SESSION['role'];
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
		
<?php
include 'connection.php';
$sql = "SELECT path as path from curriculum";
$res = mysql_query($sql);

while($r=mysql_fetch_array($res,MYSQL_ASSOC))
{
echo'<table align="center"><tr><td><a href="http://localhost/pentest/download.php?name=./curriculum/'.$r['path'].'">'.$r['path'].'</a></td></tr></table>';
}

?>




<form action="uploadcur.php" method="post" enctype="multipart/form-data">
<tr><td><br>Upload Curriculum</td></tr>
<tr><td><br><br><input type="file" name="file" id="file">
<input type="submit" value="upload"></td></tr>
</form></table>
</div>
</div>
	</div>
	
	
	
</body>
</html>