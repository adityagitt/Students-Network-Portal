<?php
include("i.php");
if(isset($_REQUEST['sub']))
{
$username=trim($_REQUEST['username']);
$password=trim($_REQUEST['password']);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password); 
$sql="SELECT * FROM 'login' WHERE 'username' ='$username' AND 'password'='$password'";
$result=mysql_query($sql);
$exists=false;
$userid=-1;
while($row=mysql_fetch_array($result)){
$exist=true;
$userid=(int)$row[0]; 
break;
}
if($exists)
{
$_SESSION['isin']=1;
$_SESSION['userid']=$userid;
}
else
{
echo "wrong";
}
}
if($_SESSION['isin']==1)
{
echo "logged in";
}
else
{
?>
<form action="?" method="post">
Username<input type="text" name="username" /><br/>
password<input type="password" name="password" /><br/>
<input type="submit" value ="submit" />
<input type="hidden" name="sub" value="1"/><br/>
</form>
<?php
}
?>