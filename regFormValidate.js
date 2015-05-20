function validateForm()
{
    var x=document.forms["regForm"]["fname"].value;
    if (x==null || x=="")
    {
        document.getElementById("fn").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("fn").style.visibility="hidden";
    }
    x=document.forms["regForm"]["lname"].value;
    if (x==null || x=="")
    {
        document.getElementById("ln").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("ln").style.visibility="hidden";
    }
    d=document.forms["regForm"]["day"].value;
    m=document.forms["regForm"]["month"].value;
    y=document.forms["regForm"]["year"].value;
    if (d=='dd' || m=='mm' || y=='yyyy')
    {
        document.getElementById("dob").style.visibility="visible";
        return false;
    }
    else if
    {
        var valid=true;
        var day = parseInt(d);
        var month = parseInt(m);
        var year  = parseInt(y);
        if((month < 1) || (month > 12)) valid = false;
        else if((day < 1) || (day > 31)) valid = false;
        else if(((month == 4) || (month == 6) || (month == 9) || (month == 11)) && (day > 30)) valid = false;
        else if((month == 2) && (day>29)) valid = false;
        else if((month == 2) && (day>28))
        {
            if((year%400==0)||(year%4==0&&year%100!=0)) valid=true;
            else valid=false;
        }
        if(valid==false)
        alert("Invalid Date Entered..!!");
    }
    else
    {
        document.getElementById("dob").style.visibility="hidden";
    }
    x=document.forms["regForm"]["gender"].value;
    if(x=="Select")
    {
        document.getElementById("gen").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("gen").style.visibility="hidden";
    }
    x=document.forms["regForm"]["add"].value;
    if (x=="" || x == null)
    {
        document.getElementById("st").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("st").style.visibility="hidden";
    }
    x=document.forms["regForm"]["city"].value;
    if (x=="City")
    {
        document.getElementById("ct").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("ct").style.visibility="hidden";
    }
    x=document.forms["regForm"]["state"].value;
    if (x=="State")
    {
        document.getElementById("stt").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("stt").style.visibility="hidden";
    }
    x=document.forms["regForm"]["mob"].value;
    if(x=="" || x==null)
    {
        document.getElementById("mb").style.visibility="visible";
        return false;
    }
    else if(NaN(x)||x.indexOf(" ")!=-1||(x.length>10))
    {
        alert("Invalid Mobile Number..!!");
        return false;
    }
    else
    {
        document.getElementById("gen").style.visibility="hidden";
    }
    x=document.forms["regForm"]["email"].value;
    if(x==null || x=="")
    {
        document.getElementById("ml").style.visibility="visible";
        return false;
    }
    else
    {
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
            alert("Not a valid e-mail address");
    	  	return false;
        }
    }
    x=document.forms["regForm"]["course"].value;
    if(x=="Select Course")
    {
        document.getElementById("crs").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("crs").style.visibility="hidden";
    }
    x=document.forms["regForm"]["year"].value;
    if(x=="Select Year")
    {
        document.getElementById("yr").style.visibility="visible";
        return false;
    }
    else
    {
        document.getElementById("yr").style.visibility="hidden";
    }
    return true;        
}