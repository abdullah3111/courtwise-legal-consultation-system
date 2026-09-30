<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    echo "Access denied. You must be an admin.";
    exit();
}

if (isset($_GET['id'])) {
    $lawyer_id = $_GET['id'];

    $query = "UPDATE lawyers SET approved = '1' WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $lawyer_id);

    if ($stmt->execute()) {
        header("Location: admin_dashboard.php?message=Lawyer+cancelled+successfully");
    } else {
        echo "Error canceling the lawyer.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid lawyer ID.";
}
?> 