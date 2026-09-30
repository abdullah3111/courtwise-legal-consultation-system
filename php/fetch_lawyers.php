<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 
$availableLawyers = [];

if (isset($_POST['location'])) {
    $location = $_POST['location'];

    $lawyersQuery = "SELECT u.id AS lawyer_id, l.name AS lawyer_name FROM Users u JOIN Lawyers l ON u.id = l.user_id WHERE l.location = ?";
    $lawyersStmt = $conn->prepare($lawyersQuery);
    $lawyersStmt->bind_param("s", $location);

    if ($lawyersStmt->execute()) {
        $lawyersResult = $lawyersStmt->get_result();

        while ($lawyer = $lawyersResult->fetch_assoc()) {
            $availableLawyers[] = [
                'lawyer_id' => $lawyer['lawyer_id'],
                'lawyer_name' => $lawyer['lawyer_name']
            ];
        }
    }
    $lawyersStmt->close();
}

$conn->close();

echo json_encode(['lawyers' => $availableLawyers]);
?>