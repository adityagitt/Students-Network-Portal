<?php
$link=mysql_connect("localhost","root","");
mysql_select_db('stud_portal') or die("not connected");
$uname=$_POST['name'];
?>
<?php
session_start();
if(isset($_SESSION['userName']))
{
header("location:home2.php");       
$userid=$_SESSION['userName'];
    $usertype=$_SESSION['USERTYPE'];
}
else
{
      $_SESSION['userName']=$uname;    
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="jobfair.css"/>
    <link rel="shortcut icon"  href="vacancy.jpg"/>
    <script type="text/javascript" src="jobscript.js"></script>
</head>
<body onload="time()">
    <table class="loginmenu" align="center">
        <tr>
            <td width="540px"><img src="logo.png" width="200px" height="70px"/></td>
            <td width="200px"><div class="timer">Welcome <?php echo $_SESSION['userName'] ?></div></td>
            <td width="200px" align="left"><div id="t" class="timer"></div></td>
        </tr>
    </table>
<table width="950px" cellspacing="1px" align="center" style="margin-top: 10px;">
<tr >
    <td class="menuleft">
            <a href="adminhomepage.php" class="menu">My Home</a>
    </td>
    <td class="menuleft" onmouseover="makeVisible('search')" onmouseout="makeHidden('search')" >
        <a href="#" class="menu">Login Account</a>
        <table  class="dropdownmenu" id="search" style="width: 135px;background-size:135px;">
            <tr><td ><a href="admin_account_insert.php" class="dropdown">Add account</a></td></tr>
            <tr><td ><a href="admin_account_view.php" class="dropdown">View account</a></td></tr>
            <tr><td ><a href="admin_account_view.php" class="dropdown">Update details</a></td></tr>
        </table>
    </td>
    <td class="menuleft" onmouseover="makeVisible('emp')" onmouseout="makeHidden('emp')" >
        <a href="#" class="menu">Employers</a>
        <table  class="dropdownmenu" id="emp" style="width: 135px;background-size:135px;">
            <tr><td ><a href="#" class="dropdown">Add employer</a></td></tr>
            <tr><td ><a href="#" class="dropdown">View employers</a></td></tr>
            <tr><td ><a href="#" class="dropdown">Update details</a></td></tr>
        </table>
    </td>
    <td class="menuleft" onmouseover="makeVisible('seeker')" onmouseout="makeHidden('seeker')" >
        <a href="#" class="menu">Jobseekers</a>
        <table  class="dropdownmenu" id="seeker" style="width: 135px;background-size:135px;">
            <tr><td ><a href="#" class="dropdown">Add Jobseeker</a></td></tr>
            <tr><td ><a href="#" class="dropdown">View Jobseekers</a></td></tr>
            <tr><td ><a href="#" class="dropdown">Update details</a></td></tr>
        </table>
    </td>
    <td class="menuleft" onmouseover="makeVisible('jobs')" onmouseout="makeHidden('jobs')" >
        <a href="#" class="menu">Vacancies</a>
        <table  class="dropdownmenu" id="jobs" style="width: 135px;background-size:135px;">
            <tr><td ><a href="#" class="dropdown">Add Vacancy</a></td></tr>
            <tr><td ><a href="#" class="dropdown">View Vacancies</a></td></tr>
            <tr><td ><a href="#" class="dropdown">Update details</a></td></tr>
        </table>
    </td>
    <td class="menuleft">
            <a href="logoutadmin.php" class="menu">Logout</a>
    </td>
</tr>
</table>
<table class="searchmenu" align="center">
<tr>
    <td width="800px">&nbsp;</a></td>
    <td width="50px">Search</td>
    <td width="50px"><input type="text" size="20"/></td>
    <td width="50px"><input type="image" src="goicon.png" style="height: 30px;"/></td>
</tr>
</table>

<table class="copyright" align="center">
    <tr>
        <td>Copyright &copy; 2012 JobFair, Inc.</td>
    </tr>
</table>
</body>
</html>
