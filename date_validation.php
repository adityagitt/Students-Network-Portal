<html>
    <head>
        <script type="text/javascript">
            function isValidDate()
            {
                var valid = true;
                var day = parseInt(document.forms['Event']['evnt_dt'].value);
                var month = parseInt(document.forms['Event']['evnt_mon'].value);
                var year  = parseInt(document.forms['Event']['evnt_yr'].value);
        
                if((month < 1) || (month > 12)) valid = false;
                else if((day < 1) || (day > 31)) valid = false;
                else if(((month == 4) || (month == 6) || (month == 9) || (month == 11)) && (day > 30)) valid = false;
                else if((month == 2) && (day>29)) valid = false;
                else if((month == 2) && (day>28))
                {
                    if((year%400==0)||(year%4==0&&year%100!=0)) valid=true;
                    else valid=false;
                }
                alert(valid);
            }
        </script>
    </head>
    <form method="post" name="Event" action="event.php">
        <table border="1" style="border-collapse: collapse;">
            <tr>
            <td height="25px" colspan="2"></td>
            </tr>
            <tr>
                <td>Event Name : </td>
                <td><input type="text" maxlength="20" name="evnt_nm" /><br /></td>
            </tr>
            <tr>
                <td>Event Date : </td>
                <td><input type="text" maxlength="2" id="evnt_dt" name="evnt_dt" value="dd" style="width: 40;margin-left: 3px;"/> -
                    <input type="text" maxlength="2" id="evnt_mon" name="evnt_mon" value="mm" style="width: 40;"/> -
                    <input type="text" maxlength="4" id="evnt_yr" name="evnt_yr" value="yyyy" style="width: 45;"/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" onclick="isValidDate();" value="Save"/><input type="reset" name="reset" value="Reset" />
                </td>
            </tr>
        </table>
    </form>
</html>