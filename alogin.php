<?php
$uname=$_POST["username"];
$pass=$_POST["password"];
if($uname=="admin" and $pass="admin")
{
    setcookie("admin",$uname,time()+3600,"/","",0);
    header("Location: display.php");
}
else
{
    header("Location: alogin.html");
}
?>