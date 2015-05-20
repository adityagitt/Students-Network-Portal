<?php
session_start();
$link=mysql_connect("localhost","root","");
if(!$link){
    die('culd not conct: '.mysql_error());
}
mysql_selectdb("stud_portal");
?>