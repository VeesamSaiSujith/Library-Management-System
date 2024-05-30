<?php
if(isset($_COOKIE["admin"]))
{
include("Db_connection.php");
$Email=$_POST["email"];
$BookName=$_POST["bookName"];
$author=$_POST["Author"];
$issueDate=$_POST["idate"];
$dueDate=$_POST["ddate"];
$returnDate=$_POST["rdate"];
$status=$_POST["Status"];
$sql="INSERT INTO books VALUES('$Email','$BookName','$author','$issueDate','$dueDate','$returnDate','$status')";
if(mysqli_query($conn,$sql)){
echo "<h1>Book information updated successfully!</h1>";
}
}
else
{
    echo "<h1>Login first<h1>";
}
?>