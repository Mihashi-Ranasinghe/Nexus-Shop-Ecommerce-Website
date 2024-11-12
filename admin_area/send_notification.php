<?php
include("includes/db.php");

if(isset($_POST['email']) && isset($_POST['message'])){
    $customer_email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $sent_at = date('Y-m-d H:i:s');
    
    $insert_notification = "INSERT INTO notifications (customer_email, message, sent_at) VALUES ('$customer_email', '$message', '$sent_at')";
    $run_notification = mysqli_query($con, $insert_notification);
    
    if($run_notification){
        echo "Notification sent successfully";
    } else {
        echo "Error: ".mysqli_error($con);
    }
}
?>
