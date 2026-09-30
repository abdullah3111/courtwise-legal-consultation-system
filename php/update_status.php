<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if (!isset($_GET['id']) || !isset($_GET['status'])) {
    echo "Invalid request.";
    exit();
}

$meeting_id = $_GET['id'];
$new_status = $_GET['status'];

$valid_statuses = ['confirmed', 'canceled', 'pending']; 
if (!in_array($new_status, $valid_statuses)) {
    echo "Invalid status.";
    exit();
}

$query = "UPDATE bookmeeting SET status = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $new_status, $meeting_id);

if ($stmt->execute()) {
    header("Location: lawyer_dashboard.php"); 
} else {
    echo "Error updating status: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
