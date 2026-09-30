<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $service_type = $_POST['service_type'];
    $bio = $_POST['bio'];

    $query = "UPDATE Lawyers SET name = ?, location = ?, service_type = ?, bio = ? WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi", $name, $location, $service_type, $bio, $user_id);

    if ($stmt->execute()) {

        $response = [
            'message' => "Profile updated successfully.",
            'profile' => [
                'name' => htmlspecialchars($name),
                'location' => htmlspecialchars($location),
                'service_type' => htmlspecialchars($service_type),
                'bio' => htmlspecialchars($bio),
            ]
        ];
        echo json_encode($response);
    } else {
        echo json_encode(['error' => "Error updating profile: " . $conn->error]);
    }

    $stmt->close();
}
$conn->close();
?>