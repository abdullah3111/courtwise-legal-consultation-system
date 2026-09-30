<?php
session_start();
include "db_connect.php";
include 'session_check.php'; 

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'lawyer' || !isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'Access denied. Please log in as a lawyer.']);
    exit();
}

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$service_type = $_POST['service_type'];
$bio = $_POST['bio'];

$image_path = null;

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif','webp'];

    if (in_array($image_ext, $allowed_ext) && $image_size < 5000000) { 
        $image_new_name = uniqid('', true) . '.' . $image_ext;
        $image_path = 'uploads/' . $image_new_name; 

        if (move_uploaded_file($image_tmp, $image_path)) {
        } else {
            echo json_encode(['error' => 'Failed to upload image']);
            exit();
        }
    } else {
        echo json_encode(['error' => 'Invalid image type or file size']);
        exit();
    }
}

$query = "SELECT * FROM Lawyers WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$lawyer = $result->fetch_assoc();
$stmt->close();

if ($lawyer) {
    if ($image_path) {
        $update_query = "UPDATE Lawyers SET name=?, email=?, location=?, service_type=?, bio=?, images=? WHERE user_id=?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssssssi", $name, $email, $location, $service_type, $bio, $image_path, $user_id);
    } else {
        $update_query = "UPDATE Lawyers SET name=?, email=?, location=?, service_type=?, bio=? WHERE user_id=?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sssssi", $name, $email, $location, $service_type, $bio, $user_id);
    }

    if ($stmt->execute()) {
        $updated_profile_query = "SELECT * FROM Lawyers WHERE user_id = ?";
        $stmt = $conn->prepare($updated_profile_query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $updated_result = $stmt->get_result();
        $updated_profile = $updated_result->fetch_assoc();
        
        echo json_encode(['success' => true, 'profile' => $updated_profile]);
    } else {
        echo json_encode(['error' => 'Failed to update profile']);
    }
} else {
    if ($image_path) {
        $insert_query = "INSERT INTO Lawyers (user_id, name, email, location, service_type, bio, images) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("issssss", $user_id, $name, $email, $location, $service_type, $bio, $image_path);
    } else {
        $insert_query = "INSERT INTO Lawyers (user_id, name, email, location, service_type, bio) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("isssss", $user_id, $name, $email, $location, $service_type, $bio);
    }

    if ($stmt->execute()) {
        $new_profile_query = "SELECT * FROM Lawyers WHERE user_id = ?";
        $stmt = $conn->prepare($new_profile_query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $new_result = $stmt->get_result();
        $new_profile = $new_result->fetch_assoc();

        echo json_encode(['success' => true, 'profile' => $new_profile]);
    } else {
        echo json_encode(['error' => 'Failed to insert profile']);
    }
}

$stmt->close();
?>
