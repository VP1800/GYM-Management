<?php
$connection=mysqli_connect("localhost","root","","gym_db");
if(!$connection)
{
    echo "<script>alert('Database not connected')</script>";
}
?>