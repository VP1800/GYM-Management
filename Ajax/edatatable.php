<?php
// STEP : 1
// GET DATA FROM DATABASE
require_once("../Database/connection.php");
$query = "SELECT * FROM `membership_form`";
$result = mysqli_query($connection,$query);

// STEP : 2
// STORE DATA INTO PHP ARRAY
$response = array();
while($row = mysqli_fetch_assoc($result))
{
    $response[] = $row;
}

// STEP : 3
// CONVERT PHP ARRAY INTO JSON AND SEND IT BACK
echo json_encode($response);

?>