<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'customer') {
    echo "Access denied. Please log in as a customer.";
    exit();
}


$user_id = $_SESSION['user_id'];

$user_name = $_SESSION['username']; 

$query = "
    SELECT 
        bookmeeting.id,
        lawyers.name AS lawyer_name,
         lawyers.email AS lawyer_email,
        bookmeeting.customer_name, 
        bookmeeting.email, 
        bookmeeting.phone, 
        bookmeeting.meeting_date, 
        bookmeeting.meeting_time, 
        bookmeeting.status, 
        bookmeeting.created_at 
    FROM bookmeeting 
    JOIN lawyers ON bookmeeting.lawyer_name = lawyers.name
    WHERE bookmeeting.customer_name = ?
";

$stmt = $conn->prepare($query);
$stmt->bind_param("s", $user_name); 
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images\court.png" type="image/x-icon">
    
  <title>CourtWise &mdash; Customer - Dashboard</title>

    <title>Customer Dashboard</title>
    <style>
body {
font-family: 'Poppins', sans-serif;
background-color: #f5e9dd;
color: #4b2e2f;
margin: 0;
padding: 20px;
line-height: 1.6;
}
h1 {
font-size: 2rem;
color: #3c2a21;
text-align: center;
margin-top: 0;
margin-bottom: 20px;
}
h2 {
text-align: center;
font-size: 1.8rem;
color: #5d4037;
margin-top: 30px;
}
.logout-btn {
position: absolute;
top: 20px;
right: 20px;
display: inline-block;
padding: 10px 20px;
background-color: #8b5e3c;
color: #fff;
text-decoration: none;
font-size: 1rem;
border-radius: 25px;
transition: background-color 0.3s ease;
font-weight: bold;
}
.logout-btn:hover {
background-color: #6d4c41;
}
table {
width: 100%;
border-collapse: collapse;
margin: 20px 0;
box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
background-color: #fff;
border-radius: 10px;
overflow: hidden;
}
th, td {
padding: 15px;
text-align: left;
border-bottom: 1px solid #ddd;
}
th {
background-color: #795548;
color: #fff;
text-transform: uppercase;
font-weight: 600;
font-size: 0.9rem;
}
td {
font-size: 0.9rem;
color: #4b2e2f;
}
tr:hover {
background-color: #fbe9e7;
cursor: pointer;
}
.status {
font-weight: bold;
text-transform: capitalize;
}
.status.pending {
color: #d17b11;
}
.status.confirmed {
color: green;
}
.status.completed {
color: #5d4037;
}
.status.canceled {
color: #b71c1c;
}
.no-meetings {
text-align: center;
font-size: 1.2rem;
color: #795548;
margin-top: 20px;
}
a{
position: fixed;
top: 5%;
right: 2%;
text-decoration: none;
background: #ff1f1f;
color: wheat;
padding: 10px;
border-radius: 7px;
}
@media (max-width: 768px) {
h1 {
font-size: 1.5rem;
}
h2 {
font-size: 1.3rem;
}
th, td {
font-size: 2.4vw;
padding: 10px;
}
.logout-btn {
font-size: 0.9rem;
padding: 8px 15px;
}
}
</style>
</head>
<body>
    <h1>Welcome to your Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>

    <h2>Your Booked Meetings</h2>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Lawyer</th>
                <th>Email</th>

                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['lawyer_name']; ?></td>
                    <td><?php echo $row['lawyer_email']; ?></td>
                    <td><?php echo $row['meeting_date']; ?></td>
                    <td><?php echo $row['meeting_time']; ?></td>
                    <td class="status <?php echo strtolower($row['status']); ?>">
                        <?php
                            if ($row['status'] == 'pending') {
                                echo 'Pending';
                            } elseif ($row['status'] == 'confirmed') {
                                echo 'Confirmed';
                            } elseif ($row['status'] == 'completed') {
                                echo 'Completed';
                            } else {
                                echo 'Canceled';
                            }
                        ?>
                    </td>
                    
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>You have no meetings scheduled.</p>
    <?php endif; ?>

    <?php
    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
