function validateForm()
{
    var x=document.forms["login"]["uname"].value;
    if (x==null || x=="")
    {
        document.getElementById("un").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("un").style.visibility="hidden";
    }
    x=document.forms["login"]["upass"].value;
    if (x==null || x=="")
    {
        document.getElementById("up").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("up").style.visibility="hidden";
    }
}