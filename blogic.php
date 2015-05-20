<?php

include_once("dbconfig.php");
class BusinessLogic
{
    function getConnection()
    {
        $con=mysql_connect(SERVER,USER,PASSWORD);
        if($con)
        return $con;
        else
        return false;
    }
    function selectDB()
    {
        if(!mysql_select_db("stud_portala"))
        return false;
    }
    function getResult($qr)
    {
        self::getConnection();
        self::selectDB();
        $rs=mysql_query($qr);
        if($rs)
        return $rs;
        else
        return false;
        mysql_close(self::getConnection());
    }
}
class login extends BusinessLogic
{
    private $uname;
    private $upass;
    public function __construct($n,$p)
    {
        $this->uname=$n;
        $this->upass=$p;
    }
    function validUser($str)
    {
        parent::getConnection();
        parent::selectDB();
        $res=mysql_query($str);
        if(mysql_affected_rows()>0)
        return true;
        else
        return false;
    }
    function getuname()
    {
        return $this->uname;
    }
}
?>