<?php
session_start();
// 1. database access
require_once("../Database/connection.php");
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    // 2. retrive matching data
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM login_master WHERE username='".$username."' AND password='".$password."'";

    // 3. authentication
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $response = array();
    if($row["user_type"]=="admin")
    {
        // 4. set session
        $_SESSION['username'] = $row["username"];

        // 5. return response
        $response = array( 
            'status' => 1, 
            'message' => "Successful"
        );
        echo json_encode($response);        
    }
    else
    {
        $response = array( 
        'status' => 0, 
        'message' => "Failed"
        );
        echo json_encode($response);        
    }
}

?>