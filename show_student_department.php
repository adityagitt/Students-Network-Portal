<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:admin_login.html");
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />

	<title><style type="text/css"></style></title>
    <link rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" href="style2.css"/>
</head>

<body background="t3.jpg">
<p align="center"  style="color: green;font-size: 30px"  ><img width="60%" align="middle"  src="st.jpg" height="150px"  /> </p>



<font size="5px">
<div align="right" id="tabs10">
                <ul>
                
<li id="current"><a href="admin_show_profile.php"><span>My profile</span></a></li>

<li><a href="show_student_department.php"><span>Student</span></a></li>
<li><a href="session_logout.php"><span>Logout</span></a></li>

                        </ul>
                </div>

</font>
<table cellpadding="180px" bgcolor="silver"   style="background-image: url('sh.jpg') ;"    align="center"  >
<tr>
<td valign="top">

<font size="3px">
<p>To view students profile select the department</p></font>
<table align="center" width="20px"  bgcolor="black" cellspacing="30px"  cellpadding="10px" >

<tr >
<td valign="top"><p>To view students profile select the department</p>
<div>
<ul id="coolMenu">
   
    <li>
        <a href="#">Select_Department</a>
        <ul>
            <li><a href="btech_student.php">Btech</a></li>
            <li><a href="mba_student.php">M.B.A</a></li>
            <li><a href="mca_student.php">M.C.A</a></li>
        </ul>
    </li>
   
</ul></div>
</td>
</tr>


</table>






</td>
</tr>
</table>









</body>
</html>
<?php
}
?>