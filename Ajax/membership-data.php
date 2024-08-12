<script>
      
      $(document).ready(function(){
        // used to select or point the first name text box
        $("#dob").focus();
    
       //button click event
       $("#Membership_Form").submit(function(e){
        //IT AVOIDS THE DEFAULT SUBMIT EVENT
        e.preventDefault();
        
        // AJAX FUNCTION START
        $.ajax({
        type:"post",
        url:"Ajax/membership-data.php",
        data:new FormData(this),
        dataType:"json",
        contentType:false,
        processData:false,
        cache:false,
        success:function(response){
            //output
            if(response.status==1)
            {
                alert("Result : "+response.message);   
                window.location.href='show.php';
            }
            else if(response.status==0)
            {
                alert("Result : "+response.message);
            }
        }
      });
        // AJAX FUNCTION END   
       }); 
        });
</script>  
<?php
require_once("../Database/connection.php");
if(isset($_POST["dob"]))
{
    $id= $_POST['id'];
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
    $query = "INSERT INTO membership_form (`e_id`,`dob`, `is_married`, `anniversary_date`, `membership_type`, `expiry_date`, `mode`,`fees`,`amount_paid`,`amount_payable`,`des`)
     VALUES ('$id','$dob', '$is_married', '$anniversary_date', '$membership_type', '$expiry_date', '$mode','$fees','$amount_paid','$amount_payable','$des')";
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
            'message' => "Error"
        );
        echo json_encode($response);
    }
}

?>