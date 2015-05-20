<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table id="account" align="center" border="0" style="width: 500px;">
            <tr>
                <th colspan="2" style="background-color: #395a7b;border:1px solid black">Insert New Account</th>
            </tr>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="uname" /></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass"/></td>
            </tr>
            <tr>
                <td>Select Type : </td>
                <td>
                    <select name="type">
                        <option selected="selected">Student</option>
                        <option>Admin</option>
                    </select>
                </td>
            </tr>
            <tr class="alt">
                <td>Show Status : </td>
                <td>
                    <?php
                        if(isset($_POST['ins']))
                        {
                            $uid=$_POST['uname'];
                            $pass=$_POST['pass'];
                            $type=$_POST['type'];
                            include("blogic.php");
                            $obj=new BusinessLogic();
                            if($type=='Student')
                            $qry="insert into stud_login(password) values('$pass')";
                            else if($type==Admin)
                            $qry="insert into admin_login(username,password) values('$uid','$pass')";
                            $obj->getResult($qry);
                            if(mysql_affected_rows()>0)
                            {
                                echo "Record inserted successfully..!!";
                                echo "<a href='db_view.php'>View Records</a>";
                            }
                            else
                            {
                                echo "Unable to insert record..!!";
                                echo "<a href='db_view.php'>View Records</a>";
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="background-color:#395a7b ;" align="center"><input type="submit" name="ins" value="Insert"/>
                <input type="reset" name="reset" value="Reset" style="margin-left: 10px;"/></td>
            </tr>
        </table>
    </form>
</html>