<?php
include 'db_connect.php';

$lawyer_id = $_POST['lawyer_id'];
$date = $_POST['date'];

$stmt = $conn->prepare("SELECT time FROM schedule_slots WHERE lawyer_id = ? AND date = ? AND status = 'available'");
$stmt->bind_param("is", $lawyer_id, $date);
$stmt->execute();
$result = $stmt->get_result();

$options = '';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['time'] . '">' . date("g:i A", strtotime($row['time'])) . '</option>';
}
echo $options ?: '<option disabled>No slots available</option>';

$stmt->close();

