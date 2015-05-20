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
                                    Students Feedback Form
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                <form>
                    <table border="0" style="margin-top:50px;margin-left: 15px;height:100px;width:990px;" align="center">
                            <tr>
                                <td style="font-family:Cambria;font-size: 20px;font-weight: bold;padding-top: 50px;">
                                    Leave Your Comments Here
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family:Cambria;font-size: 20px;font-weight: bold;padding-left: 5px;">
                                    <textarea style="height: 200px;width: 500px;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family:Cambria;font-size: 20px;padding-top: 50px;">
                                    Email Address<br />
                                    <input type="text" name="mail" size="40"/><br />
                                    <input type="submit" name="submit"/>
                                </td>
                            </tr>
                    </table>
                </form>
                </tr>
        </div>
    </tbody>
    </table>
    </body>
</html>