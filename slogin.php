<?php
$link=mysql_connect("localhost","root","");
mysql_select_db('stud_portal') or die("not connected");
$uname=$_POST['name'];
$passa=$_POST['pass'];
$sql="SELECT count(*) FROM login WHERE(
username='".$uname."' and password='".$passa."')"; 

$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);

if($result[0]>0)
{
header("location:studentHome.php");
$_SESSION['userName']=$uname; 
echo "<br/>Welcome".$_SESSION['userName']."!";
}
else
{
echo "login failed";
}
?>