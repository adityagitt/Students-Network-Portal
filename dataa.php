<?php
$link=mysql_connect("localhost","root","");
 
mysql_select_db('stud_portal');
?>
<?php
if(isset($_POST['submit']))
{
    $stdid=$_POST['id'];
    $naame=$_POST['name'];
    $paass=$_POST['pass'];
    
$str="insert into login values('$stdid','$naame','$paass')";

mysql_query($str);
if(mysql_affected_rows()>0)
    {
     echo "record saved";
    }
   
mysql_close($link);
}
else
{
?>
<html>
 <form name="regForm" method="post"  action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

usr name<input type="text" name="name"/><br/>	
password<input type="password" name="pass"/><br/>
stud id:<input type="hidden" name="id"/><br/>
<input type="submit" name="submit" />

</form>
</html>
<?php
}
?>			