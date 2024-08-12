<?php
require_once("../Database/connection.php");
if (isset($_POST['name'])) {

  $name = $_POST["name"];
      $gender = $_POST["gender"];
      $contact1 = $_POST["contact1"];
      $contact2 = $_POST["contact2"];
      $contact3 = $_POST["contact3"];
      $email1 = $_POST["email1"];
      $email2 = $_POST["email2"];
      $refno1 = $_POST["refno1"];
      $refno2 = $_POST["refno2"];
      $type = $_POST["type"];  
    $query = "INSERT INTO enquiry_master (`name`, `gender`, `contact`, `work`, `telephone`, `email`, `alternate_email`, `refno1`, `refno2`, `type`)
    VALUES ('$name', '$gender', '$contact1', '$contact2', '$contact3', '$email1', '$email2', '$refno1', '$refno2', '$type')";
    $result = mysqli_query($connection,$query);
    if($result)
    {
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
}?>
