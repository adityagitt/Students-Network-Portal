<html>
	<head>
		<title>Sign In</title>
		<link rel="stylesheet" href="theme.css" type="text/css" />
        <script type="text/javascript" src="loginFormValidate.js"></script>
	</head>
	<body class="theme">
    	<table class="body_table">
        	<tbody>
        		<?php include("head.html"); ?>
        		<?php include("home_menu.html"); ?>
                <div class="content_box" style="height:450px;">
	                <div style="padding-top:30px;padding-left:50px;padding-right:50px;">
                        <fieldset style="border:0px;height:400;color:#0066CC">
                        <legend style="padding:20px;font-family:cambria;font-size:30;font-weight:bold;" align="center">Sign In to Portal</legend>
                        <form name="login" action="slogin.php" method="post" onsubmit="return validateForm()">
                        <table width="900px;" align="right" border="0">
                            <tr>
                                <td width="300px" rowspan="8" valign="middle" align="center"><img src="images/log_key.png" height="225" width="225"/></td>
                            </tr>
                            <tr>
                                <td class="tdleft">Username :</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="text_box" name="name" id="name" /><span id="un" style="visibility: hidden;color: red;">Required..!!</span></td>
                            </tr>
                            <tr>
                                <td class="tdleft" style="padding-top:10px;">Password :</td>
                            </tr>
                            <tr>
                    		    <td><input type="password" class="text_box" name="pass" id="pass"/><span id="up" style="visibility: hidden;color: red;">Required..!!</span></td>
                            </tr>
                            <tr>
                            <td><input type="checkbox" name="chk" value="off" style="margin-top: 15px;" >Remember Me</input></td>
                            </tr>
                            <tr>
                                <td style="padding-top:15px;">
                                    <input type="submit" class="sbmt_btn" name="submit" value="Sign In"/>
                                    <input type="reset" class="sbmt_btn" name="reset" value="Reset" style="margin-left: 5px;"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family:cambria;font-size:20;padding-top:15px;">Not Registered?<a href="rrff.php" target="_self" style="color: red;">Click Here!</a></td>
                            </tr>
                    	</table>
                        </form>	
                        </fieldset>
	                </div>
                </div>
        	</tbody>
    	</table>
	</body>
</html>