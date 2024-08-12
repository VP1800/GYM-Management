<?php
// Assuming you have a database connection established
require_once("Database/connection.php");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the id parameter from the URL
$id = $_GET['id'];

// Perform a query using the retrieved id
$sql = "Update purchases set status='deactive' where p_id=$id";
$result = $connection->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch data from the result set

        // Process and display the data as needed
        echo "<script>window.location.href='ledger.php';</script>";
        // Add more fields as needed
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
