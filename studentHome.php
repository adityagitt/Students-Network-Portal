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
		<?php include("stud_menu.php"); ?>
        <div class="content_box">
            <table border="0" class="strip" style="margin-left: 15px;" align="center">
                <tr>
                    <td style="font-family:mistral;font-size: 30px;font-weight: bold;color: navy;padding-left: 5px;">

Welcome <?php if(isset($_SESSION['user'])) echo "$_SESSION[user]" ;?>
                    </td>
                </tr>
            </table>
        </div>
    </tbody>
    </table>
    </body>
</html>