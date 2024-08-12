<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./w3css/w3.css">
<link rel="stylesheet" href="./images">
<link rel="stylesheet" href="./font-awesome/font-awesome-4.7.0">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
background-image: url("login_bg.jpg");
background-size: cover;

background-attachment: fixed;
}
button {
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 200px;
  margin-left: 60px;
}
.login {
    padding: 1em;
    color: hsl(0 0 100);
    border: none;
    font-weight: 600;
    margin-top: 15px;
    margin-left: 35%;
    background-color: #1273eb;
    width: 100px;
    display: flex;
  }
  .footer {
    display: flex;
    font-size: 12px;
    color: hsl(0deg 0% 37%);
    gap: 4em;
    margin-left: 5%;
    margin-top: 4%;
    color: #1273eb;
    
  }
img {
  max-width: 50%;
  height: auto;
  margin-left:33%;
}
.center-form{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 35px;
}
.error-box {
  background-color: #f2dede;
  border: 1px solid #ebcd1;
  color:#a94442;
  padding: 10px;
  text-align:center;
  width: 300px;
  margin: 0 auto;
  display: none;
  position:fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.form{
  width:380px ;
  height:420px; 
  padding:35px;
}
  </style>
</head>
<body>
  <div id="error-container" style="display: none;"></div>
  <div class="w3-container center-form">
    <form method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin form" onsubmit="return formSubmission()">
      <label for="fname">Forgot Password</label>
      <div class="w3-row w3-section">
        <div class="w3-rest">
          <input class="w3-input w3-border" id="username" name="username" type="text" placeholder="Enter Username">
        </div>
      </div>
      <div class="w3-row w3-section">
        <div class="w3-rest">
          <input class="w3-input w3-border" id="Newpassword" name="Newpassword" type="password" placeholder="New Password">
          <input type="checkbox" onfocus ="myFunction1()">Show Password
        </div>
        
      </div>
      <div class="w3-row w3-section">
        <div class="w3-rest">
          <input class="w3-input w3-border" id="enterPassword" name="enterpassword" type="password" placeholder="Re-enter Password">
          <input type="checkbox" onfocus="myFunction2()">Show Password
        </div>
        
      </div>
      <button class="w3-button w3-blue" type="submit" name="submit">Reset Password</button>
    </form>
  </div>

  <script>
    function showErrorMessage(message) {
      var errorContainer = document.getElementById("error-container");
      errorContainer.innerHTML = '<div class="w3-panel w3-pale-red w3-border nomargin"><p>' + message + '</p></div>';
      errorContainer.style.display = "block";
    }

    function hideErrorMessage() {
      var errorContainer = document.getElementById("error-container");
      errorContainer.style.display = "none";
    }

    function formSubmission() {
      var Newpassword = document.getElementById("Newpassword").value;
      var enterPassword = document.getElementById("enterPassword").value;

      var passwordpattern = /^(?=.*[a-zA-Z0-9])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
    if (!passwordpattern.test(password)) {
      showErrorMessage("Invalid password format! Password should be min 8 & max 20 characters in length.");
      return false;
    }

    var passwordpattern1 = /^(?=.*[a-zA-Z0-9])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
    if (!passwordpattern1.test(enterpassword)) {
      showErrorMessage("Invalid password format! Password should be min 8 & max 20 characters in length.");
      return false;
    }

      // Check for empty values in required fields
      if (Newpassword === "" || enterPassword === "") {
        showErrorMessage("Please fill out all fields");
        return false;
      }

      if (Newpassword !== enterPassword) {
        showErrorMessage("Passwords do not match");
        return false;
      }

      hideErrorMessage();
      return true;
    }
  </script>
  <script>

    function myFunction1() {
      var x = document.getElementById("Newpassword");
      if (x.type === "password" || y.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
    function myFunction2() {
      var x = document.getElementById("enterPassword");
      if (x.type === "password" || y.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

<?php
// Include the connection file
require_once("connection.php");

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $newpassword = $_POST['Newpassword'];
    $enterpassword = $_POST['enterpassword'];

    $errors = array();

    // validations
    if (empty($username)) {
        $errors[] = "Enter a valid username";
    }

    if (empty($newpassword) || !preg_match('/^[a-zA-Z0-9!@#$%^&*?]{8,20}$/', $newpassword)) {
        $errors[] = "Enter a valid password";
    }

    if (empty($enterpassword) || !preg_match('/^[a-zA-Z0-9!@#$%^&*?]{8,20}$/', $enterpassword)) {
        $errors[] = "Enter a valid re-enter password";
    }

    if ($newpassword !== $enterpassword) {
        $errors[] = "Passwords do not match";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<script>alert('$error');</script>";
        }
    } else {
        // Check if the provided username exists
        $query = "SELECT username FROM login_master WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Username does not exist');</script>";
        }
        else{
            // Query to update
        $query1 = "UPDATE login_master SET password='$newpassword' WHERE username='$username'";
        $result1 = mysqli_query($connection, $query1);

        if ($result) {
            echo "<script>alert('Password changed successfully');</script>";
        } else {
            echo "<script>alert('Password change failed');</script>";
        }

      }  
    }
}
?>
</body>
</html>