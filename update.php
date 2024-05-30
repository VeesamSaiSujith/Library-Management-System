<?php
if(isset($_COOKIE["admin"]))
{
include("Db_connection.php");
$email = $_POST['email'];
$bookName = $_POST['bookName'];
$author = $_POST['Author'];
$issueDate = $_POST['idate'];
$dueDate = $_POST['ddate'];
$returnDate = $_POST['rdate'];
$status = $_POST['Status'];

// Update query
$sql = "UPDATE books SET bookName = '$bookName', Author = '$author', issueDate = '$issueDate', dueDate = '$dueDate', returnDate = '$returnDate', status = '$status' WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
else
{
    echo "<h2>Login to perform the operation</h2>";
}
// Close connection
$conn->close();

?>