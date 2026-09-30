<?php
include 'db_connect.php'; 
include 'session_check.php'; 

$location = isset($_POST['location']) ? $_POST['location'] : '';
$service_type = isset($_POST['service_type']) ? $_POST['service_type'] : '';

$query = "SELECT * FROM Lawyers WHERE approved = 1"; 

if (!empty($location)) {
    $query .= " AND location = ?";
}

if (!empty($service_type)) {
    $query .= " AND service_type = ?";
}

$stmt = $conn->prepare($query);

if (!empty($location) && !empty($service_type)) {
    $stmt->bind_param("ss", $location, $service_type);
} elseif (!empty($location)) {
    $stmt->bind_param("s", $location);
} elseif (!empty($service_type)) {
    $stmt->bind_param("s", $service_type);
}

$stmt->execute();
$result = $stmt->get_result();
echo "<h2>Available Lawyers</h2>";
echo "<div class='locals'>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='" . $row['images'] . "' alt='Profile Image'>";
        echo "<div class='card-content'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Location: " . $row['location'] . "</p>";
        echo "<p>Service Type: " . $row['service_type'] . "</p>";
        echo "<a href='lawyer_profile.php?id=" . $row['id'] . "'>View Profile</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "<script type='text/javascript'>
    alert('No lawyers found matching your criteria.');
    window.location.href = '../index.php'; // Redirect to the homepage or wherever you prefer
  </script>";
}
echo "</div>";


$stmt->close();
$conn->close();
?>
<style>
    body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    color: #333;
}

h2 {
    text-align: center;
    font-size: 40px;
    font-weight: 700;
    color: #2d231f;
    margin: 30px 0;
    position: relative;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
}

h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background-color: #b69d74;
    margin: 10px auto 0;
    border-radius: 2px;
}

.locals {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
}

.card {
    display: flex;
    align-items: flex-start;
    background-color: #ffffff;
    border: 2px solid #b69d74;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    height: 100%;
  box-sizing: border-box;
  align-items: center;
  justify-content: center;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
}

.card img {
    flex-shrink: 0;
    border-radius: 16px;
    width: 120px;
    height: 120px;
    margin-right: 20px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-content {
    flex: 1;
}

.card-content h3 {
    font-size: 22px;
    color: #333;
    margin: 0 0 10px;
    font-weight: 600;
}

.card-content p {
    font-size: 16px;
    color: #555;
    margin: 5px 0;
}

.card-content a {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #2d231f;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.card-content a:hover {
    background-color: #b69d74;
}

@media (max-width: 768px) {
    .card {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .card img {
        margin-right: 0;
        margin-bottom: 15px;
    }

    .card-content h3 {
        font-size: 20px;
    }

    .card-content p {
        font-size: 14px;
    }
}

</style>

