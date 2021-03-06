<html>
	<head>
		<title>Welcome to Students Portal</title>
		<link rel="stylesheet" href="theme.css" type="text/css" />
        <script type="text/javascript" src="loginFormValidate" ></script>
	</head>
	<body class="theme">
    	<table class="body_table" border="0">
        	<tbody>
                <!--Head Section Begins-->
        		  <?php include("head.html"); ?>                
                <!--Head Section Ends-->
             
                <!--Menu Section Begins-->
   		          <?php include("home_menu.html"); ?>
                </table>
                <!--Menu Section Ends-->
                
                <!--Content Section Begins-->
                <table class="content_box" border="0" style="height: 100%;" cellspacing="0">
                    <tr >
                        <td style="vertical-align: top;width: 750px;">
                            <table border="0" class="strip" style="margin-left: 15px;" align="center">
                                <tr>
                                    <td style="font-family:mistral;font-size: 30px;font-weight: bold;color: navy;padding-left: 5px;">
                                        Welcome to Students Portal..!!
                                    </td>
                                </tr>
                            </table>
                            <table border="0" style="margin-top:30px;margin-left: 15px;width: 750px;font-family: cambria;">
                                <tr>
                                    <td style="text-align: left;font-size: 18px;" colspan="2">Portal is built on the idea that makes it more efficient and useful.After all,Portal facilitates to:  </td>
                                </tr>
                                <tr><td colspan="2" style="height: 20px;"></td></tr>
                                <tr>
                                    <td style="width: 64px;padding-top: 5px;padding-bottom: 5px;">
                                        <img src="images/mail.png" />
                                    </td>
                                    <td style="padding-top: 10px;">
                                        Send and receive lots of e-mails through portal.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 64px;padding-top: 5px;padding-bottom: 5px;">
                                        <img src="images/cal.png" />
                                    </td>
                                    <td>
                                        View today's events at a glance.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 64px;padding-top: 5px;padding-bottom: 5px;">
                                        <img src="images/address.png" />
                                    </td>
                                    <td>
                                        Add your contacts including name and e-mail address.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 64px;padding-top: 5px;padding-bottom: 5px;">
                                        <img src="images/bookmark.png" />
                                    </td>
                                    <td>
                                        Add any webpage to your personal bookmarks. 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="vertical-align: top;padding-left: 5px;">
                        <form name="login" action="prelogin.php" method="post" onsubmit=" return validateForm()">
                            <table class="table_right" border="0">
                                <tr>
                                    <th style="background-color: white;height: 40px;;">Account Login</th>
                                </tr>
                                <tr>
                                    <td class="tdleft" style="padding-top: 30px;">Username :</td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text_box" name="uname" /></td>
                                </tr>
                                <tr>
                                    <td class="tdleft" style="padding-top:15px;">Password :</td>
                                </tr>
                                <tr>
                        		    <td><input type="password" class="text_box" name="upass"/></td>
                                </tr>
                                <tr>
                                <td><input type="checkbox" name="chk" value="on" style="margin-top: 15px;" >Remember Me</input></td>
                                </tr>
                                <tr>
                                    <td style="padding-top:15px;">
                                        <input type="submit" class="sbmt_btn" name="submit" value="Sign In"/>
                                        <input type="reset" class="sbmt_btn" name="reset" value="Reset" style="margin-left: 5px;"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:cambria;font-size:15;padding-top:10px;">Not Registered?<a href="reg_form.php" target="_self" style="color: red;">Click Here!</a></td>
                                </tr>
                            </table>
                        </form>
                        </td>
                    </tr>
                </table>
                <!--Content Section Ends-->
        	</tbody>
    	</table>
	</body>
</html>