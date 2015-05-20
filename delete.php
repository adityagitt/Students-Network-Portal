<?php
        include_once('blogic.php');
        if(isset($_GET['uid']))
        {
            $obj=new BusinessLogic();
            $res=$obj->getResult($qry);
            $qry="delete from stud_login where stud_id='$_GET[uid]'";
            $res=mysql_query($qry);
            if(mysql_affected_rows()>0)
            header("location:db_update.php");
            mysql_close($link);
        }
?>