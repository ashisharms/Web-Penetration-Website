<?php
session_start();
if(empty($_SESSION['username']))
{
?>

<html>
<head>
<title>Welcome to SISHARMSDIGITAL</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="header">
	<div class="logo" align="center">
	<div id="txt"><font size="7px"><big><b>SISHARMS</b></big></font></div>
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
	<div id="img" style="background:url(./images/water.jpg);">
	<h1>Welcome to Web Penetration & Security Zone.</h1>
	<div class="transbox">
		<div class="f_div">
		<center><h2>Login</h2></center>
		<form align="center" name="login" method="post" action="log.php">
			<b>Username&nbsp;:</b> <input class="box" type="text" name="username"><br><br>
			<b>Password&nbsp;:&nbsp;</b> <input class="box" type="password" name="password"><br><br>
			<input class="button" type="submit" value="Log In">
			<input type="hidden" name="role" value="user">
		</form>
		</div>
		<div class="r_div">
		<center><h2>Sign Up</h2></center>
		<form align="center" name="signup" method="post" action="signup.php">
			<b>Username &nbsp;&nbsp;: </b>		<input class="box" type="text" name="username"><br><br>
			<b>First Name : </b>				<input class="box" type="text" name="first_name"><br><br>
			<b>Last Name : </b>					<input class="box" type="text" name="last_name"><br><br>
			<b>Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b><input class="box" type="text" name="profile"><br><br>
			<b>Password&nbsp;&nbsp;&nbsp;: </b><input class="box" type="password" name="password"><br><br>
												<input type="hidden" name="role" value="user">
												<input class="button" type="submit" value="Sign Up">
			
			
		</form>	
		</div>
		</div>
	</div>
	<div id="footer">
		<div class="left"><p>&copy; 2017 SISHARMSDIGITAL.</p></div>
		<div class="right"><p><span><a id="link" href="http://kyrion.in/security/">SISHARMS</a></span></p></div>
	</div>
	
</body>
</html>
<?php
}
else
{
header("location:home.php?image=image.php");
}

?>