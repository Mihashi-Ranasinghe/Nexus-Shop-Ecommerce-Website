<?php

$customer_session = $_SESSION['customer_email'];

// Retrieve customer information (already existing code)

// Retrieve notifications for the customer
$get_notifications = "SELECT * FROM notifications WHERE customer_email='$customer_session' ORDER BY sent_at DESC";
$run_notifications = mysqli_query($con, $get_notifications);

?>

<!-- Display Notifications -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Your Notifications</h2>
            <?php
            // Loop through notifications and display each one
            while ($row_notification = mysqli_fetch_array($run_notifications)) {
                $notification_message = $row_notification['message'];
                $sent_at = $row_notification['sent_at'];

                echo "
                    <div class='alert alert-info'>
                        <p>$notification_message</p>
                        <small>Sent at: $sent_at</small>
                    </div>
                ";
            }
            ?>
        </div>
    </div>
</div>
