<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <table id="account" align="center" border="0">
        <tr>
            <th colspan="5" style="background-color: #395a7b;border:1px solid black">Account Information</th>
        </tr>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Type</th>
            <th colspan="2">Update</th>
        </tr>
        
        <?php
        include("blogic.php");
        $obj=new BusinessLogic();
        $qry="Select * from stud_login";
        $obj->getResult($qry);
        $res=mysql_query($qry);
        while($arr=mysql_fetch_row($res))
        {
            echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td>";
            echo "<td><a href='update.php?uid=$arr[0]'>Edit</a></td>";
            echo "<td><a href='delete.php?uid=$arr[0]'>Delete</a></td></tr>";
            if($arr=mysql_fetch_row($res))
            {
                echo "<tr class=alt><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td>";
                echo "<td><a href='update.php?uid=$arr[0]'>Edit</a></td>";
                echo "<td><a href='delete.php?uid=$arr[0]'>Delete</a></td></tr>";
            }
        }
        ?>
    </table>
</html>