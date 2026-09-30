<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lawyer_id = $_POST['lawyer_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    $customer_id = $_SESSION['user_id'];
    $customer_name = $_SESSION['username'];
    
    $query = "SELECT * FROM bookmeeting WHERE lawyer_name = (SELECT name FROM Lawyers WHERE id = ?) AND meeting_date = ? AND meeting_time = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iss", $lawyer_id, $meeting_date, $meeting_time);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "This slot is already booked. Please choose a different time."]);
    } else {
        $lawyerQuery = "SELECT name FROM Lawyers WHERE id = ?";
        $lawyerStmt = $conn->prepare($lawyerQuery);
        $lawyerStmt->bind_param("i", $lawyer_id);
        $lawyerStmt->execute();
        $lawyerResult = $lawyerStmt->get_result();

        if ($lawyerResult->num_rows > 0) {
            $lawyer = $lawyerResult->fetch_assoc();
            $lawyer_name = $lawyer['name'];
            
            $insertQuery = "INSERT INTO bookmeeting (lawyer_name, customer_name, email, phone, meeting_date, meeting_time, status) 
                            VALUES (?, ?, ?, ?, ?, ?, 'pending')";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bind_param("ssssss", $lawyer_name, $customer_name, $email, $phone, $meeting_date, $meeting_time);
            
            if ($insertStmt->execute()) {
                echo json_encode(["status" => "success", "message" => "Meeting booked successfully!"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error booking the meeting. Please try again."]);
            }
            $insertStmt->close();
        } else {
            echo json_encode(["status" => "error", "message" => "Lawyer not found."]);
        }
    }

    $stmt->close();
    $conn->close();
}
?>
