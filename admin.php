<html>
<head>
<title>Welcome to Admin Page</title>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>                
				</ul>
			</div>
	</div>
	<div id="img" style="background:url(./images/water.jpg);">
	<h1>Welcome to Web Penetration & Security Zone.</h1>
	<div class="transbox">
		<div class="a_div">
		<center><h2>Admin Login</h2>
		<form class="form" align="center" name="login" method="post" action="log.php">
			<b>Username&nbsp;:</b> <input class="box" type="text" name="username"><br><br>
			<b>Password&nbsp;:&nbsp;</b> <input class="box" type="password" name="password"><br><br>
			<input class="button" type="submit" value="Log In">
			<input type="hidden" name="role" value="admin">
		</form>
		</div>
		</div>
	</div>
	<div id="footer">
		<div class="left"><p>&copy; 2015 Kyrion.</p></div>
		<div class="right"><p><span><a id="link" href="http://kyrion.in/security/">Kyrion</a></span></p></div>
	</div>
	
</body>
</html>