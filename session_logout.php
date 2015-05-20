<?php
session_start();
if(isset($_SESSION['user']))
{
    session_destroy();
    unset($_SESSION['USER']);
    header("location:admin_login.html");
}
else
{
    header("location:admin_login.html");
}



?>