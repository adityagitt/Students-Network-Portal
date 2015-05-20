<?php
if(isset($_POST['submit']))
{
 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $mob=$_POST['mob'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $year=$_POST['yr'];
    $password=$_POST['pass'];
$str="insert into studdetails values('$fname','$lname','$gender','$add','$city','$state','$mob','$email','$course','$year','$password')";
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
            	<form name="regForm" method="post"  action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <table border="0" style="width:924px;margin-left:auto;margin-right:auto;padding:5px;">
                    <tr><td colspan="4" style="text-align: right;font-size: 15px;"><sup>*</sup> Required fields</th></tr>
                	<tr><th colspan="4" style="padding:30px;">PERSONAL DETAILS</th></tr>
                	<tr style="height: 30px;">
                		<td class="tdleft">First Name :</td>
                		<td class="tdright"><input type="text" name="fname" id="fname" maxlength="30"/><span id="fn" style="visibility: hidden;color: red;">*</span></td>
                        <td class="tdleft">Last Name :</td>
                		<td class="tdright"><input type="text" name="lname" id="lname" maxlength="30"/><span id="ln" style="visibility: hidden;color: red;">*</span></td>
                	</tr>	
                	
                	<tr>
                		<td class="tdleft">Date of Birth :</td>
                		<td class="tdright">
                		<select name="day" id="day">
                                <option selected="selected">dd</option>
                                <?php
                                    for($i=1;$i<=31;$i++)
                                    echo "<option>".$i."</option>";
                                ?>
                        </select>
                                
                		<select name="month" style="width:50px;" id="month">
                             	<option selected="selected">mm</option>
                                <?php
                                    for($i=1;$i<=12;$i++)
                                    echo "<option>".$i."</option>";
                                ?>
                		</select>
                		<select name="year" id="year">
                                <option selected="selected">yyyy</option>
                                <?php
                                    for($i=1986;$i<=1994;$i++)
                                    echo "<option>".$i."</option>";
                                ?>
                		</select>
                        <span id="dob" style="visibility: hidden;color: red;">*</span>
                        </td>
                        <td class="tdleft">Gender : </td>
                        <td>
                        <select name="gender" id="gender">
                                <option selected="selected">Select</option><option>Male</option><option>Female</option>
                		</select>
                        <span id="gen" style="visibility: hidden;color: red;">*</span>
                        </td>
                	</tr>
                	<tr>
                		<td class="tdleft" valign="top" rowspan="3">Street Address :</td>
                		<td class="tdright" rowspan="3"><textarea name="add" rows="3" cols="17" id="add"></textarea><span id="st" style="visibility: hidden;color: red;">*</span></td>
                		<td class="tdleft">City :</td>
                		<td class="tdright">
                		<select name="city" style="width: 72px;" id="city">
                          	<option selected="selected">City</option><option>Lucknow</option><option>Noida</option><option>Kanpur</option><option>Allahabad</option>
                		<option>Other</option>
                		</select>
                        <span id="ct" style="visibility: hidden;color: red;">*</span>
                        </td>
                	</tr>
                    <tr>&nbsp;</tr>
                	<tr>
                        <td class="tdleft" valign="top">State :</td>
                		<td class="tdright">
                		<select name="state" style="width: 72px;" id="state">
                	        <option selected="selected">State</option><option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Madhya Pradesh</option>
                		<option>Uttar Pradesh</option><option>Uttarakhand</option><option>Other</option>
                		</select>
                        <span id="stt" style="visibility: hidden;color: red;">*</span>
                        </td>
                	</tr>
                	<tr>
                		<td class="tdleft : ">Mobile No. :</td>
                		<td class="tdright"><input type="text" name="mob" id="mob" maxlength="10"/><span id="mb" style="visibility: hidden;color: red;">*</span></td>
                        <td class="tdleft">E-mail :</td>
                		<td colspan="2"><input type="text" id="email" name="email"/><span id="ml" style="visibility: hidden;color: red;">*</span></td>
                	</tr>
                	<tr>
                        <td class="tdleft : ">Password. :</td>
                 <td class="tdright"><input type="password" name="pass" id="pass" minlength="4"/></td></tr>
<tr><th colspan="4" style="padding:30px;">CURRENT ACADEMIC DETAILS</th></tr>
                	<tr>
                		<td class="tdleft">Course :</td>
                        <td class="tdright">
                			<select name="course" id="course" style="width:159px;">			
                				<option selected="selected">Select Course</option>
                                <option>B.Tech.</option><option>BBA</option><option>BCA</option>
                                <option>MBA</option><option>MCA</option><option>M.Tech.</option>
                			</select>
                            <span id="crs" style="visibility: hidden;color: red;">*</span>
                		</td>
                        <td class="tdleft">Year :</td>
                        <td class="tdright">
                			<select name="yr" id="yr" style="width:159px;">			
                				<option selected="selected">Select Year</option>
                                <option>I</option><option>II</option><option>III</option><option>IV</option>
                			</select>
                            <span id="yr" style="visibility: hidden;color: red;">*</span>
                		</td>
                    </tr>    
                    <tr><th colspan="4" style="padding:30px;">UPLOAD PHOTOGRAPH</th></tr>  
                    <tr><td colspan="4" align="center"><input type="file" name="pic" value=""/></td></tr>
                    <tr>
                        <td colspan="4" style="padding-left: 375px;padding-top:30px;padding-bottom:30px;"><input type="submit" class="sbmt_btn" value="Register" name="submit"/>
                        <input type="reset" class="sbmt_btn" value="Reset" style="margin-left: 5px;"/></td>
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