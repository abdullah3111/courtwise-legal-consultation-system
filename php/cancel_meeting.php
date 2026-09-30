<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'customer') {
    echo "Access denied. Please log in as a customer.";
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_GET['id'])) {
    $meeting_id = $_GET['id'];

    $check_query = "SELECT * FROM bookmeeting WHERE id = ? AND customer_name = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ii", $meeting_id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $cancel_query = "UPDATE bookmeeting SET status = 'canceled' WHERE id = ?";
        $cancel_stmt = $conn->prepare($cancel_query);
        $cancel_stmt->bind_param("i", $meeting_id);

        if ($cancel_stmt->execute()) {
            header("Location: customer_dashboard.php?message=Meeting+Canceled+Successfully");
            exit();
        } else {
            echo "Error canceling the meeting.";
        }
    } else {
        echo "You are not authorized to cancel this meeting.";
    }

    $stmt->close();
    $cancel_stmt->close();
} else {
    echo "Invalid meeting ID.";
}

$conn->close();
?>
