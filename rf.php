<?php
if(isset($_POST['submit']))
{
 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

$str="insert into studdetails values('$fname','$lname')";
$link=mysql_connect("localhost","root","");
 
mysql_select_db('stud_portala');
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
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="theme.css" type="text/css" />
        
	</head>
	<body class="theme">
	<table class="body_table">
	<tbody>
		<?php include("head.html"); ?>
		<?php include("home_menu.html"); ?>
        <div class="content_box">
            	<form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                    <table border="0" style="width:924px;margin-left:auto;margin-right:auto;padding:5px;">
                    <tr><td colspan="4" style="text-align: right;font-size: 15px;"><sup>*</sup> Required fields</th></tr>
                	<tr><th colspan="4" style="padding:30px;">PERSONAL DETAILS</th></tr>
                	<tr style="height: 30px;">
                		<td class="tdleft">First Name :</td>
                		<td class="tdright"><input type="text" name="fname" id="fname" maxlength="30"/><span id="fn" style="visibility: hidden;color: red;">*</span></td>
                        <td class="tdleft">Last Name :</td>
                		<td class="tdright"><input type="text" name="lname" id="lname" maxlength="30"/><span id="ln" style="visibility: hidden;color: red;">*</span></td>
<td><input type="submit" class="sbmt_btn" value="Register" name="submit"/></td>
                	
</tr>	
                	
                	</table>
            	</form>	
        </div>
    </tbody>
    </table>
    </body>
</html>
<?php
}
?>