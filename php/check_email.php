<?php
include 'db_connect.php';
include 'session_check.php'; 

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $email_check_query = "SELECT * FROM Users WHERE email = '$email' LIMIT 1";
    $result_email_check = mysqli_query($conn, $email_check_query);
    if (mysqli_num_rows($result_email_check) > 0) {
        echo "exists"; 
    } else {
        echo "available";
    }
}
?>
