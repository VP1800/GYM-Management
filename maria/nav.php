<?php
session_start();
if(!isset($_SESSION['username']))
{
    echo "<script>alert('Unauthorized access');</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 3;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover,
.dropdown:hover .dropbtn {
  background-color: #00FF00;
  color: black;
}

.topnav a.active {
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav-right {
  float: right;
}

.main {
  margin: 50px;
  z-index: -1;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child),
  .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {
    position: relative;
  }
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    padding: 14px 16px;
  }

  .topnav.responsive .dropdown-content {
    position: relative;
    display: block;
    text-align: left;
  }
  
  /* Style the dropdown links for the responsive menu */
  .topnav.responsive .dropdown-content a {
    float: none;
    display: block;
    text-align: left;
    padding: 12px 16px;
  }
}

@media screen and (min-width: 600px) {
  .topnav a.logout:not(:first-child),
  .topnav a.change-password:not(:first-child) {
    display: none;
    padding-left: 16px;
    padding-left: 16px;
  }
}

@media screen and (max-width: 600px) {
  .topnav a.logout1,
  .topnav a.change-password1 {
    display: none;
  }
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
<a href="#">LOGO</a>
<a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
<a href="showmembers.php"><i class="fa fa-user-plus"></i> View Membership</a>
<a href="enquiry_master.php"><i class="fa fa-question-circle"></i> Enquiry Form</a>
<a href="show.php"><i class="fa fa-list-ol"></i> List of Enquiries</a>
<a href="unpaid_fees.php"><i class="fa fa-list-ol"></i> Unpaid Fees</a>
<div class="topnav-right">
<a href="changepassword.php" class="change-password1"><i class="fa fa-key"></i> Change Password</a>
<a href="Ajax/logout.php"  class="logout1" style="color:red"><i class="fa fa-sign-out"></i> Logout</a>
</div>  
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div class="main">
</div>
</body>
</html>
