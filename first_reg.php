<?php
session_start();
?>
<html>
	<head>
		<title>Student Home</title>
		<link rel="stylesheet" href="theme.css" type="text/css" />
    </head>
	<body class="theme">
	<table class="body_table">
	<tbody>
		<?php include("head.html"); ?>
		<?php include("home_menu.html"); ?>
        <div class="content_box">
        <table border="0" cellspacing="0">
            <tr >
                <td style="vertical-align: top;">
                    <table border="0" class="strip" style="margin-top:25px;margin-left: 15px;height:100px;width:990px;" align="center">
                        <tr>
                            <td style="font-family:Cambria;font-size: 25px;font-weight: bold;color: navy;padding-left: 5px;text-align: center;">
                            <?php if(isset($_SESSION['user'])) echo "Congratulations ".$_SESSION['user']."!You have been successfully registered!" ;?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding-top: 75px;">
                    <table border="0" style="width: 400px;height: 150px;">
                    <tr>
                        <th colspan="3" style="background-color: #395a7b;border:1px solid black">Account Information</th>
                    </tr>
                    <tr>
                        <th style="background-color: #9cbdde">Student Id</th>
                        <td style="background-color: #9cbdde"><?php if(isset($_SESSION['stud_id'])) echo $_SESSION['stud_id'];?></td>
                    </tr>
                    <tr>
                        <th style="background-color: #9cbdde">Password</th>
                        <td style="background-color: #9cbdde"><?php if(isset($_SESSION['pass']))echo $_SESSION['pass'];?></td>
                    </tr>
                    <tr>
                        <th colspan="3" style="background-color: #395a7b;border:1px solid black;height: 15px;"></th>
                    </tr>
                </td>
            </tr>
            </tr>
        </table>
        <table style="margin-top: 50px;">
            <tr>
                <td style="color: maroon;font-family: cursive;font-size: 20px;">
                    Keep your Student Id and password confidential!!
                </td>
            </tr>
        </table>
        <table style="margin-top: 50px;">
            <tr>
                <td style="font-family:cursive;font-size: 20px;">
                    To view your Portal... <a href="login_form.php" style="color: red;"> Click here >></a> 
                </td>
            </tr>
        </table>
        </div>
    </tbody>
    </table>
    </body>
</html>
<?php
session_destroy();
?>