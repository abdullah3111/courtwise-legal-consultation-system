<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    echo "Access denied. Please log in as an admin.";
    exit();
}

$appointmentQuery = "SELECT lawyers.id, Users.username AS customer_name, lawyers.approved 
                     FROM lawyers 
                     JOIN Users ON lawyers.id = Users.id";
$appointmentResult = $conn->query($appointmentQuery);


?>

<?php

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    echo "Access denied. Please log in as an admin.";
    exit();
}

$lawyerQuery = "SELECT * FROM Lawyers";
$lawyerResult = $conn->query($lawyerQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
  <link rel="shortcut icon" href="images\court.png" type="image/x-icon">
  <title>CourtWise &mdash; Admin - Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
background-color: #f7f3ed;
font-family: 'Arial', sans-serif;
color: #5a3e1b;
}
.container {
background-color: #fff9f2;
padding: 20px;
border-radius: 10px;
box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
margin-top: 20px;
}
@media (min-width: 576px) {
.container, .container-sm {
max-width: none;
}
}
h1, h2 {
color: #8b5e3c;
font-weight: bold;
margin-bottom: 15px;
}
.nav-pills .nav-link {
background-color: #c7a589;
color: #fff;
border-radius: 5px;
}
.nav-pills .nav-link.active {
background-color: #8b5e3c;
}
.nav-pills .nav-link:hover {
background-color: #b29276;
}
.table {
background-color: #ffffff;
margin-top: 15px;
border-radius: 5px;
box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
}
.table th {
background-color: #8b5e3c;
color: #ffffff;
text-align: center;
}
.table td {
vertical-align: middle;
}
.badge {
font-size: 14px;
padding: 5px 10px;
border-radius: 5px;
}
.table td{
padding: 0 !important;
}
.badge-success {
background-color: #6d482c;
color: #fff;
}
.badge-warning {
background-color: #c7a589;
color: #fff;
}
.badge-danger {
background-color: #a0522d;
color: #fff;
}
.btn {
border: none;
padding: 10px 15px;
font-size: 14px;
border-radius: 5px;
font-weight: bold;
text-transform: uppercase;
}
.btn-primary {
background-color: #8b5e3c;
color: #fff;
}
.btn-primary:hover {
background-color: #6d482c;
}
.btn-danger {
background-color: #a0522d;
color: #fff;
}
.btn-danger:hover {
background-color: #8b4513;
}
.btn-success {
background-color: #218838;
color: #fff;
}
.btn-success:hover {
background-color: #5a3e1b;
}
.logout-btn {
background-color: #a0522d;
color: #fff;
font-weight: bold;
text-transform: uppercase;
}
.logout-btn:hover {
background-color: #8b4513;
}
.tab-content {
padding-top: 15px;
}
.alert {
border-radius: 5px;
padding: 10px 15px;
}
.alert-success {
background-color: #d4c4b1;
color: #5a3e1b;
}
.alert-danger {
background-color: #a0522d;
color: #fff;
}
.card {
background-color: #fff9f2;
border: 1px solid #d4c4b1;
border-radius: 10px;
padding: 15px;
margin-bottom: 15px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.card h5 {
color: #8b5e3c;
font-weight: bold;
}
.card p {
margin: 0;
color: #5a3e1b;
font-size: 14px;
}
.approve-btn{
margin-bottom: 10px;
}
@media (max-width: 768px) {
table {
font-size: 2vw;
}
.approve-btn,.btn-danger{
font-size: 2vw;
}
}
</style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <nav class="nav nav-pills flex-column flex-sm-row mb-3">
            <a class="flex-sm-fill text-sm-center nav-link" href="#manage-lawyers" data-toggle="tab">Manage Lawyer Profiles</a>
        </nav>

        <div class="tab-content">
     

            <div class="tab-pane fade show active" id="manage-lawyers">
    <h2>Manage Lawyer Profiles</h2>
 
    <table class="table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Service Type</th>
                <th>Bio</th>
                <th>Status</th> 
                <th>Actions</th> 
                        </tr>
        </thead>
        <tbody>
            <?php while ($lawyer = $lawyerResult->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $lawyer['user_id']; ?></td>
                    <td><?php echo $lawyer['name']; ?></td>
                    <td><?php echo $lawyer['location']; ?></td>
                    <td><?php echo $lawyer['service_type']; ?></td>
                    <td><?php echo $lawyer['bio']; ?></td>
                    <td>
                       
                        <?php
                            $status = $lawyer['approved'];
                            if ($status == '1') {
                                echo '<span class="badge badge-success">Approved</span>';
                            } elseif ($status == '0') {
                                echo '<span class="badge badge-warning">Pending</span>';
                            } else {
                                echo '<span class="badge badge-danger">Canceled</span>';
                            }
                        ?>
                    </td>
                    <td>

    <a href="#" data-lawyer-id="<?php echo $lawyer['user_id']; ?>" class="btn btn-success approve-btn">Approve</a>
    <a href="cancel_lawyer.php?id=<?php echo $lawyer['user_id']; ?>" class="btn btn-danger">Cancel</a>
</td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>


        </div>

        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
<script>
$(document).ready(function() {
    $('.approve-btn').click(function(e) {
        e.preventDefault();  // Prevent the default anchor behavior
        var lawyer_id = $(this).data('lawyer-id');
        
        // Send AJAX request to approve the lawyer
        $.ajax({
            url: 'approve_lawyer.php',  // PHP file to handle the request
            type: 'GET',
            data: { id: lawyer_id },  // Pass the lawyer ID
            success: function(response) {
                alert('Approved SuccessFully');  // Show success message
                location.reload();  // Optionally reload the page to update the status
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
});
</script>
