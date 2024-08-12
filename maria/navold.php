<?php
session_start();

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

.topnav .profile-dropdown {
  float: right;
  overflow: hidden;
}

.profile-dropdown:hover .profile-dropdown-content {
  overflow: hidden;
  display: block;
}

.dropdown {
  float: left;
  overflow: hidden;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn,
.topnav .profile-dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.topnav .profile-dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  right: 0;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Profile button style on hover */
.profile-dropdown .dropbtn:hover {
  background-color: #00FF00;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn  {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

@media screen and (min-width: 600px) {
  .topnav a.logout:not(:first-child) {display: none;} {
    float: left;
    padding-left: 16px;
    padding-left: 16px;
  }
}
@media screen and (min-width: 600px) {
  .topnav a.change-password:not(:first-child) {display: none;} {
    float: left;
    padding-left: 16px;
    padding-left: 16px;
  }
}

@media screen and (max-width: 600px) {
  .topnav a.logout1:not(:first-child) {display: none;}
}
@media screen and (max-width: 600px) {
  .profile-dropdown {
    display: none;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
    
<a href="unpaid_fees.php">LOGO</a>
<a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
<a href="showmembers.php"><i class="fa fa-user-plus"></i> View Membership</a>
<a href="membership_update.php?id=5"><i class="fa fa-user-plus"></i>Update Membership</a>

<div class="dropdown">  
    <button class="dropbtn"><i class="fa fa-question-circle"></i> Enquiry
    </button>
    <div class="dropdown-content">
      <a href="enquiry_master.php"> Enquiry Form</a>
      <a href="show.php"> List of Enquiries</a>
    </div>
  </div>

  <div class="profile-dropdown">  
    <button class="dropbtn"><i class="fa fa-user"></i> Profile
    </button>
    <div class="profile-dropdown-content">
        <p style="font-size:18px">Hello, <?php echo $_SESSION['username']; ?></p>
        <a href="changepassword.php" style="color:black" class="change-password1"><i class="fa fa-key"></i> Change Password</a><br>
        <a href="Ajax/logout.php" style="color:red" class="logout1"><i class="fa fa-sign-out"></i> Logout</a>
  </div>
</div>
<a href="changepassword.php" class="change-password"><i class="fa fa-key"></i> Change Password</a>
<a href="logout.php" class="logout" style="color:red;" ><i class="fa fa-sign-out" style="font-size:20px; color:red;"></i> Logout</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>
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

</body>
</html>
