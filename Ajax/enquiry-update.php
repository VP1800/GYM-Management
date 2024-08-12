<?php
if (isset($_POST['name'])) {
    $id =23;
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $contact1 = $_POST["contact1"];
        $contact2 = $_POST["contact2"];
        $contact3 = $_POST["contact3"];
        $email1 = $_POST["email"];
        $email2 = $_POST["email1"];
        $refno1 = $_POST["refno1"];
        $refno2 = $_POST["refno2"];
        $type = $_POST["type"];  
      
      $query = "UPDATE `enquiry_master` SET 
                    `name`='$name',
                    `gender`='$gender',
                    `contact`='$contact1',
                    `work`='$contact2',
                    `telephone`='$contact3',
                    `email`='$email',
                    `alternate_email`='$email1',
                    `refno1`='$refno1',
                    `refno2`='$refno2',
                    `type`='$type',
                    `updated_at`= current_timestamp()
                  WHERE `e_id`='$id'";
      $result = mysqli_query($connection,$query);
      if($id)
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
  }


?>