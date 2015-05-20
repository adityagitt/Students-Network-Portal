<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:admin_login.html");
}
else
{
?>
<!DOCTYPE html 
<html>

<head>
	<title>Administrator Profile</title>
    	<link rel="stylesheet" href="style1.css"/>
</head>
<body background="images/t3.jpg" >
<p align="center"  style="color: green;font-size: 30px"  >
	<img align="middle"  src="images/admins.png" height="150px"/>Welcome Admin 
</p>
<font size="5px">
	<div align="right" id="tabs10">
                <ul>
			<li id="current"><a href="admin_show_profile.php?id=$_SESSION['user']"><span>My profile</span></a></li>
			<li><a href="show_student_department.php"><span>Students </span></a></li>
			<li><a href="session_logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
</font>
<table  style="background-image: url('images/sh.jpg');height:10px" cellpadding="200px"    align="center" bgcolor="silver" >
<tr>
<td valign="top"><font  style="background: white; " size="5px " ><p align="left">Welcome back.....!</p><img src="images/mk.jpg" /><a  href="anouncement.html">Anouncement</a>
<br /> <br /> <br /><img src="images/book.png" /><a  href="anouncement.html">Upload</a>
<br /><br /> <br /><img src="images/pen.jpg" /> <a href="anouncement.html">Thought of the day</a>
</td>
</table>
</body>
</html>
<?php
}
?>