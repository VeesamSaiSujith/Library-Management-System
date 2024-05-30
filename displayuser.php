<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome to Library</title>
<link rel="stylesheet" href="login.css">
</head>

<body>

<header>
  <div class="headersize">
    <h1>Library Management System</h1>
    <nav>
      <ul>
        <li><a href="lms.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="signup1.html">Sign up</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>
            <h1>Your books</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                
                        <th scope="col">Book Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Issue Date</th>
				<th scope="col">Due Date</th>
				<th scope="col">Return Date</th>
				<th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody id='tableBody'></tbody>
        </div>
    </div>

    
   
</body>

</html>



<?php
if(isset($_COOKIE["user"]))
{
    $val=$_COOKIE["user"];
include("Db_connection.php");
$sql="SELECT * FROM books where email='$val'";
$result=mysqli_query($conn,$sql);
?>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['bookname'];?></td>
<td><?php echo $row['author'];?></td>
<td><?php echo $row['issuedate'];?></td>
<td><?php echo $row['duedate'];?></td>
<td><?php echo $row['returndate'];?></td>
<td><?php echo $row['status'];?></td>
</tr>
<?php }}else {echo "Login first";}?>
</table>
</body>

</html>