<?php
include_once('blogic.php');
$id=(int)$_POST['uname'];
$pass=$_POST['upass'];
$obj=new login($id,$pass);
$str="SELECT stud_id,password from stud_login WHERE stud_id=$id and password='$pass'";
if($obj->validUser($str))
{
    session_start();
    $_SESSION['stud_id']=$id;
    $str="SELECT fname,lname from stud_details WHERE stud_id=$id";
    $rs=$obj->getResult($str);
    if($rs)
    {
        $row=mysql_fetch_row($rs);
        $_SESSION['user']=$row[0]." ".$row[1];
    }
    if(isset($_POST['chk']) && $_POST['chk']=='on')
    {
        $cookie_content=$id.'-'.$pass;
        setcookie("USERCOOKIE",$cookie_content,time()+60*60*24);
    }
    header('location:studentHome.php');
}
else
{
    header('location:login_form.php');
}
?>