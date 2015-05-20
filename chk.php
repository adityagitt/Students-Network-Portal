<?php
if(isset($_REQUEST['chk']))
echo $_REQUEST['chk'];
?>
<html>
<form method="get">
<input type="checkbox"  name="chk" value="rem">Remember Me</input>
<input type="submit" />
</form>
</html>
