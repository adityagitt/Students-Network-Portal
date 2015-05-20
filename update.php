<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <?php
        include_once('blogic.php');
        if(isset($_GET['uid'])){
        $qry="Select * from stud_login where stud_id=$_GET[uid]";
        $obj=new BusinessLogic();
        $res=$obj->getResult($qry);
        $arr=mysql_fetch_row($res);}
        if(isset($_POST['update']))
        {
            $uid=$_POST['uname'];
            $pass=$_POST['pass'];
            $type=$_POST['type'];
            $qry="update account_info set password='$pass' where username='$arr[0]'";
            mysql_query($qry);
            if(mysql_affected_rows()>0)
                $status = "Records update successfully..!!";
            else
                $status = "Update failed..!!";
        }
    ?>
    <form method="post">
        <table id="account" align="center" border="0">
            <tr>
                <th colspan="2" style="background-color: #395a7b;border:1px solid black">Update Account Information</th>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="uname" value="<?php echo $arr[0];?>"/></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value="<?php echo $arr[1];?>"/></td>
            </tr>
            <tr>
                <td>Select Type : </td>
                <td>
                    <select name="type" >
                        <option <?php if($arr[2]=='Student')echo 'selected="selected"';?> >Student</option>
                        <option <?php if($arr[2]=='Admin')echo 'selected="selected"'; ?> >Admin</option>
                    </select>
                </td>
            </tr>
            <tr class="alt">
                <td>Show Status : </td>
                <td>
                    <?php
                        if(isset($status)) echo $status;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="background-color:#395a7b ;" align="center"><input type="submit" name="update" value="Update"/>
                <input type="reset" name="reset" value="Reset" style="margin-left: 10px;"/></td>
            </tr>
        </table>
    </form>
</html>