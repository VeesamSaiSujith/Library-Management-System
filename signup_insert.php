<?php
include("Db_connection.php");
$Name=$_POST["name"];
$Email=$_POST["email"];
$Pass=$_POST["password"];
$sql="INSERT INTO signup VALUES('$Name','$Email','$Pass')";
if(mysqli_query($conn,$sql))
{?>
<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	 <header>
  <div class="container">
    <h1>Library Management System</h1>
    <nav>
      <ul>
        <li><a href="lms.html">Home</a></li>
        <li><a href="About.html">About</a></li>
 <li><a href="alogin.html">Admin</a></li>
        <li><a href="signup1.html">Signup</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php
echo "<h1>Registered successfully!</h1>";
}
?>