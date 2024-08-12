<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>login form</title>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/w3css/w3.css">
<link rel="stylesheet" href="CSS/images">
<link rel="stylesheet" href="CSS/font-awesome/font-awesome-4.7.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    background-color: #00ff00;
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
<div>
  <div class="w3-container center-form">
<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin form"> 
<div>
  <img src="login_avatar.png" alt="login avatar" width="120" height="120px">
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" id="username" name="username" type="text" placeholder="Enter your mobile number">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" id="password" name="password" type="password" placeholder="Enter Password" >
    </div>
          <input type="checkbox" onclick ="myFunction1()">Show Password
    </div>

<button class="w3-button w3-blue" type="submit"  name="login">Login</button>
  <div class="footer"><a href="url">Signup</a><a href="url">Forgot Password?</a></div>
</div>
<!-- </center> -->

</form>
</div>
</body>
</html>

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
  function hideerror()
  {
    hideErrorMessage();
  }
  function validateUsername()
  {
    var username = document.getElementById("username").value;
    var digits = /^\[0-9]{10}$/ ;
    if (!digits.test(username)) 
    {
      showErrorMessage("Please enter a valid  username");
      return false;
    }
    hideErrorMessage();
    return true;
    exit;
  }

  function validPassword()
  {
    var password = document.getElementById("password").value;
    var passwordpattern = /^[a-zA-Z0-9!@#$%^&*?]{8,20}$/;
    if (!passwordpattern.test(password)) 
    {
      showErrorMessage("Please enter a valid password");
      return false;
    }
    hideErrorMessage();
    return true;
    exit;
  }



  function formSubmission() {

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  
  // Check for empty values in required fields
  if (username === "") {
    showErrorMessage("Please enter your username");
    return false;
  }

  if (password === "") {
    showErrorMessage("Please enter an password");
    return false;
  }

  return true;
}


</script>
<!-------show password1-------------->
<script>
function myFunction1() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>

</html>

<?php

// 1. database access
require_once("connection.php");
if(isset($_POST["login"]))
{
  $username = mysqli_real_escape_string($connection, $_POST["username"]);
  $password = mysqli_real_escape_string($connection, $_POST["password"]);

    // Validate username and password format
    $validusername = preg_match('/^\d{10}$/', $username);
    $validpassword = preg_match('/^[a-zA-Z0-9!@#$%^&*?]{8,20}$/', $password);

  if (!$username && !$password) {
    echo "<script>alert('Both fields are required');</script>";
    exit; // Stop further execution
  }

  if (!$username) {
    echo "<script>alert('Username is required!');</script>";
    exit; // Stop further execution
  }

  if (!$password) {
    echo "<script>alert('Password is required!');</script>";
    exit; // Stop further execution
  }

  if (!$validusername && !$validpassword) {
    echo "<script>alert('Both fields are invalid');</script>";
    exit; // Stop further execution
  }

  if (!$validusername) {
    echo "<script>alert('Invalid username format');</script>";
    exit; // Stop further execution
  }

  if (!$validpassword) {
    echo "<script>alert('Invalid password format');</script>";
    exit; // Stop further execution
  }

else{


    // 2. retrive matching data
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT username,password,user_type FROM login_master WHERE username='".$username."' AND password='".$password."'";

    // 3. authentication
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $response = array();
    if($row["user_type"]=="admin")
    {
        // 4. set session
        
        $_SESSION['username'] = $row["username"];
        //header('Location:dashboard.php');
        echo '<script>window.location="dashboard.php";</script>';
    }
    else
    {
      echo "<script>alert('Invalid credentials');</script>";
      session_destroy();
    }
}
}
?>

