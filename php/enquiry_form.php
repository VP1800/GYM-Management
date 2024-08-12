<?php
  if (isset($_POST['btn']))
  {

    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $gender = mysqli_real_escape_string($connection, $_POST["gender"]);
    $contact1 = mysqli_real_escape_string($connection, $_POST["contact1"]);
    $contact2 = mysqli_real_escape_string($connection, $_POST["contact2"]);   
    // if($contact2 === 0){$contact2="";}
    $contact3 = mysqli_real_escape_string($connection, $_POST["contact3"]);
    // if($contact3 === 0){$contact3="";}
    $email1 = mysqli_real_escape_string($connection, $_POST["email1"]);
    $email2 = mysqli_real_escape_string($connection, $_POST["email2"]);
    $refno1 = mysqli_real_escape_string($connection, $_POST["refno1"]);    
    $refno2 = mysqli_real_escape_string($connection, $_POST["refno2"]);
    $type = mysqli_real_escape_string($connection, $_POST["type"]);
    // Server-side validation

  if (empty($name)) {
    echo "<script>showErrorMessage('php Please enter your name')</script>";
  }
  else if(!preg_match('/^[A-Za-z\s]*$/ ', $name))
  {
    echo "<script>showErrorMessage('php Please enter a valid name')</script>";
  }

  else if (empty($contact1)) 
  {
    echo "<script>showErrorMessage('php Please enter atleast first contact numbers')</script>";
  }

  else if(!preg_match('/^\d{10}$/', $contact1))
  {
    echo "<script>showErrorMessage('php Please enter a valid 10-digit contact number')</script>";
  }

  else if(!preg_match('/^\d{10}$/', $contact2) && !empty($contact2))
  {
    echo "<script>showErrorMessage('php Please enter a valid 10-digit work number')</script>";
  }

  else if(!preg_match('/^\d{11}$/', $contact3) && !empty($contact3))
  {
    echo "<script>showErrorMessage('php Please enter a valid 10-digit telephone number')</script>";
  }

  // else if (empty($contact2) || !preg_match('/^\d{10}$/', $contact2)) {
  //   echo "<script>showErrorMessage('php--Please enter a valid 10-digit contact number')";
  // }

  // else if (empty($contact3) || !preg_match('/^\d{10}$/', $contact3)) 
  // {
  //   echo "<script>showErrorMessage('php--Please enter a valid 10-digit contact number')";
  // }

  else if (empty($email1)) 
  {
    echo "<script>showErrorMessage('php Please enter atleast 1 email address')</script>";
  }

  else if(!filter_var($email1, FILTER_VALIDATE_EMAIL))
  {
    echo "<script>showErrorMessage('php Please enter a valid alternate email address')</script>";
  }

  else if(!filter_var($email1, FILTER_VALIDATE_EMAIL) && !empty($email2))
  {
    echo "<script>showErrorMessage('php Please enter a valid second email address')</script>";
  }

  else if (empty($refno1)) 
  {
    echo "<script>showErrorMessage('php Please provide atleast one reference number')</script>";
  }

  else{
    $squery = "SELECT `e_id`,`contact` from enquiry_master where `contact` = '$contact1'";
    $sresult = mysqli_query($connection, $squery);
    if($srow=mysqli_fetch_assoc($sresult)){
      $e_id=$srow["e_id"];
      echo "<script>alert('Record present with same Contact number');</script>";
      echo "<script>window.location.href = 'enquiry_update.php?e_id=$e_id';</script>";
      // header("Location: show.php");
    }
    else{
    $query = "INSERT INTO enquiry_master (`name`, `gender`, `contact`, `work`, `telephone`, `email`, `alternate_email`, `refno1`, `refno2`, `type`, `created_at`, `updated_at`) VALUES ('$name', '$gender', '$contact1', '$contact2', '$contact3', '$email1', '$email2', '$refno1', '$refno2', '$type', current_timestamp(), current_timestamp())";

    $queryfire = mysqli_query($connection, $query);
    if ($queryfire) {
      echo "<script>alert('Data inserted successfully!');</script>";
    } else {
      echo "<script>alert('Data has NOT been inserted');</script>";
    }
    }
  }
}
?>