<?php
require_once("../Database/connection.php");
if(isset($_POST["dob"]))
{
    $e_id= $_POST['id'];
    $dob = $_POST['dob'];
    $is_married = $_POST['is_married'];
    $anniversary_date = $_POST['anniversary_date'];
    $membership_type = $_POST['membership_type']; // Corrected variable name
    $expiry_date = $_POST['expiry_date'];
    $mode = $_POST['mode'];
    $fees = $_POST['tableFee'];
    $amount_paid = $_POST['userPaidAmount'];
    $amount_payable = $_POST['amount_payable'];
    $des= $_POST["des"];
    $query = "UPDATE `membership_form` `dob`='$dob', `is_married`='$is_married', `anniversary_date`='$anniversary_date',
     `membership_type`='$membership_type', `expiry_date`'$expiry_date', `mode`='$mode',`fees`='$fees',
     `amount_paid`='$amount_paid',`amount_payable`='$amount_payable',`des`='$des' WHERE `e_id`='$e_id'";
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
            'message' => "'$e_id'"
        );
        echo json_encode($response);
    }
}

?>