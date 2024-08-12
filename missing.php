<?php
require_once("Database/connection.php");
$query = "SELECT p_id, bill_no, party_name,item, amount, date, description, status FROM `purchases` where `status`='deactive'";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/w3.css">
    <link rel="stylesheet" href="CSS/w3schools.com_w3css_4_w3.css">
    <link rel="stylesheet" href="CSS/FONT/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/FONT/font-awesome.css">
    <link rel="stylesheet" href="CSS/JQUERY/jquery.dataTables.min.css">
    <?php include 'nav.php';?>
    <title>Missing</title>
</head>
<body>
<div class="container-fluid" id="container">
            <div style="overflow-x: auto;">
                <table class="table table-striped fixed-width-table"> 
                  <thead>
                     <tr>
                     <th>Sr.No.</th>
                            <th>Quantity</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Actions</th>
                     </tr>
                  </thead>
                <tbody>
                <?php 
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    echo '<tr>
    <td>'.(++$count).' </td>
    <td>'.$row['bill_no'].'</td>
    <td>'.$row['party_name'].'</td>
    <td style="max-width: 50px; max-height: 50px;"><img src="imageView.php?p_id='.$row["p_id"].'" width="100%" height="100%">
    </td>
    <td>'.$row['amount'].'</td>
    <td>'.$row['date'].'</td>
    <td>'.$row['description'].'</td>
    
    <td>
    <a class="btn btn-info" href="status.php?id='.$row['p_id'].'">'.$row['status'].'</a>
    <a href="ledger.php?p_id='.$row['p_id'].'"><i class="fa fa-edit fa-lg" style="font-size:25px;color:blue"></i></a> &nbsp;&nbsp;
    <a href="javascript:void(0);" onclick="confirmpDelete('.$row['p_id'].')"><i class="fa fa-trash fa-lg" style="font-size:25px;color:red"></i></a>

</tr>';
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script> 
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
<script> 
  $(document).ready( function () { 
  $('.table').DataTable(); 
  }); 
</script>
</tbody> 
</table>  
</body>
</html>