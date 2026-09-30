<?php
session_start();
include "db_connect.php";

if (!isset($_SESSION['user_id']) || !isset($_POST['name']) || !isset($_POST['email'])) {
    echo json_encode(['success' => false, 'message' => 'Access denied or incomplete form.']);
    exit();
}

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$service_type = $_POST['service_type'];
$bio = $_POST['bio'];

$image = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
}

$query = "INSERT INTO Lawyers (user_id, name, email, location, service_type, bio, image) VALUES (?, ?, ?, ?, ?, ?, ?)
          ON DUPLICATE KEY UPDATE name=?, email=?, location=?, service_type=?, bio=?, image=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("issssssssssss", $user_id, $name, $email, $location, $service_type, $bio, $image, $name, $email, $location, $service_type, $bio, $image);
$stmt->execute();
$stmt->close();

echo json_encode(['success' => true, 'message' => 'Profile created/updated successfully.']);
exit();
?>
