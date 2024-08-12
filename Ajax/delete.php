<?php
require_once("../Database/connection.php");
if(isset($_GET["id"]))
{
    
    $id = $_GET["id"];
    $query = "DELETE FROM enquiry_master WHERE e_id='".$id."'";

    $result = mysqli_query($connection,$query);

    if($result)
    {
        echo "<script>alert('Deleted');</script>";
        echo "<script>window.location.href='../show.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed');</script>";
        echo "<script>window.location.href='../show.php';</script>";
    }
}
?>