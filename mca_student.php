<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:admin_login.html");
}
else
{
?>

<?php

$link=@mysql_connect("localhost","root","") or die ("Server could not be connected,,,,!").mysql_error();
mysql_select_db('studentportal') or die ("Database could not found...!");
$str="SELECT * from mcastudent";
$res=mysql_query($str) or die("Query not executed..!");
?>
<body bgcolor="gray"><font><h1 align="center">M.C.A Students List</h1></font>
<table bgcolor="white" align="center" border="1">
<tr>
<td width="130px" bgcolor="skyblue">ID</td>
<td width="200px" bgcolor="skyblue">NAME</td>
</tr>

<?php
while($row=mysql_fetch_row($res))
{
  echo"<tr><td>".$row[0]."</td>"."<br/>";
  
  echo"<td>".$row[1]."</td>"."<td>"."<a href='update.php?name=$row[1]'>edit </a>"."<a href='delete.php?id=$row[0]'>delete </a>"."</td>"."</tr>";
  
    
}




mysql_close($link);

?>
</table>
</body>
<?php
}
?>







