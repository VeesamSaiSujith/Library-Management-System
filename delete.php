<?php
if(isset($_COOKIE["admin"]))
{
include("Db_connection.php");
$email = $_POST['email'];
$bname=$_POST['bookname'];

    // SQL query to delete the record based on the email ID
    $sql = "DELETE FROM books WHERE email = '$email' AND bookname='$bname'";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    // Close the statement
    $stmt->close();
}
else{
    echo "<h2>Please Login to continue the action</h2>";
}
// Close the database connection
$conn->close();

?>