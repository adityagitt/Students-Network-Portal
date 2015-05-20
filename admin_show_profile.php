 <?php
$link=@mysql_connect("localhost","root","") or die ("Server could not be connected,,,,!").mysql_error();
mysql_select_db('stud_portal') or die ("Database could not found...!");
$str="SELECT * FROM login where username=$_POST['name']";
$res=mysql_query($str) or die("Query not executed..!");
?>
<?php
session_start();
echo "WElcome". $_SERVER['user'];
?>
<body bgcolor="gray">
<table bgcolor="white" align="center" border="1">
<tr>
<td bgcolor="skyblue">Username</td>






<td bgcolor="skyblue">Password</td>






<td bgcolor="skyblue" >Gender </td>




<td bgcolor="skyblue" >Age</td>




<td bgcolor="skyblue">Location</td>



<td bgcolor="skyblue">ContactNo</td>


</tr>





<?php
while($row=mysql_fetch_row($res))
{
  echo"<tr><td>".$row[0]."</td>"."<br/>";
  
  echo"<td>".$row[1]."</td>"."<br/>";
  
  echo"<td>".$row[2]."</td>"."<br/>";  
  echo"<td>".$row[3]."</td>"."<br/>";
  echo"<td>".$row[4]."</td>"."<br/>";
  echo"<td>".$row[5]."</td>"."<br/>";
  echo"<td>".$row[6]."</td>"."<br/>";
  echo"<td>".$row[7]."</td>"."<td>"."<a href='update_admin.php?Username=$row[0]'>Edit </a>"."<a href='delete_admin.php?id=$row[0]'>delete </a>"."</td>"."</tr>";
}
mysql_close($link);
?>
</table>
</body>
