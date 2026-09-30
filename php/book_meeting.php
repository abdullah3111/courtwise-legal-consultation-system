<?php
session_start();
include 'session_check.php'; 

if (!isset($_SESSION['user_id'])) {
    echo "<script type='text/javascript'>
    alert('You must be logged in as a customer to book a meeting.');
    window.location.href = 'login_book.php'; 
  </script>";
    echo "<br><a href='login_book.php'><button>Login</button></a>";
    exit();
}

include 'db_connect.php';


if ($_SESSION['role'] !== 'customer') {
    
    echo "<script type='text/javascript'>
            alert('Only customers can book a meeting.');
            window.location.href = 'index.php'; // Redirect to the homepage or wherever you prefer
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lawyer_id = $_POST['lawyer_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    $customer_id = $_SESSION['user_id'];

    if (empty($lawyer_id) || empty($email) || empty($phone) || empty($meeting_date) || empty($meeting_time)) {
        echo "Please fill in all fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $meeting_date = mysqli_real_escape_string($conn, $meeting_date);
    $meeting_time = mysqli_real_escape_string($conn, $meeting_time);

    $lawyerQuery = "SELECT name FROM Lawyers WHERE id = ?";
    $lawyerStmt = $conn->prepare($lawyerQuery);
    $lawyerStmt->bind_param("i", $lawyer_id);
    $lawyerStmt->execute();
    $lawyerResult = $lawyerStmt->get_result();

    if ($lawyerResult->num_rows > 0) {
        $lawyer = $lawyerResult->fetch_assoc();
        $lawyer_name = $lawyer['name'];
    } else {
        echo "Lawyer not found.";
        exit();
    }

    $customer_name = $_SESSION['username'];  

    $insertQuery = "INSERT INTO bookmeeting (lawyer_name, customer_name, email, phone, meeting_date, meeting_time, status) 
                    VALUES (?, ?, ?, ?, ?, ?, 'pending')";

    $insertStmt = $conn->prepare($insertQuery);

    if ($insertStmt === false) {
        echo "Error preparing query: " . $conn->error;
        exit;
    }

    $insertStmt->bind_param("ssssss", $lawyer_name, $customer_name, $email, $phone, $meeting_date, $meeting_time);

    if ($insertStmt->execute()) {
        header("Location: lawyer_profile.php?id=$lawyer_id&message=Meeting booked successfully!");
        exit();
    } else {
        echo "Error booking meeting: " . $insertStmt->error;
    }

    $insertStmt->close();
    $conn->close();
}
?>

