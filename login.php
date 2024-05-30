<?php
include("Db_connection.php");
$count=0;
$email=$_POST["email"];
$dummy=$email;
$pass=$_POST["password"];
$sql="select * from signup";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{                                                  
if($email==$row['email'] && $pass==$row['password'])
{
$count++;
break;
}
}
if($count!=0)
{
setcookie("user",$email,time()+3600,"/","",0);
header("Location: displayuser.php");
}
else
{
?>
<script>
alert("Invalid username and password");
</script>
<?php
include("login.html");
}
?>