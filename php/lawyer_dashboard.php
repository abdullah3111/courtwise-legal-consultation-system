<?php
session_start();
include "db_connect.php";
include 'session_check.php'; 

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'lawyer' || !isset($_SESSION['user_id'])) {
    echo "Access denied. Please log in as a lawyer.";
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM Lawyers WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$lawyer = $result->fetch_assoc();
$stmt->close();

$all_lawyers_query = "SELECT * FROM Lawyers";
$all_lawyers_result = $conn->query($all_lawyers_query);


$book_meeting_query = "
    SELECT 
     bookmeeting.id,
        bookmeeting.lawyer_name, 
        bookmeeting.customer_name, 
        bookmeeting.email, 
        bookmeeting.phone, 
        bookmeeting.meeting_date, 
        bookmeeting.meeting_time, 
        bookmeeting.status, 
        bookmeeting.created_at 
    FROM bookmeeting 
    JOIN lawyers 
    ON bookmeeting.lawyer_name = lawyers.name 
    WHERE lawyers.user_id = ? ";
$book_meeting_stmt = $conn->prepare($book_meeting_query);
$book_meeting_stmt->bind_param("i", $user_id);
$book_meeting_stmt->execute();
$book_meeting_result = $book_meeting_stmt->get_result();
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourtWise &mdash; Lawyer - Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images\court.png" type="image/x-icon">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
body {
background-color: #f7f3ed;
color: #5a3e1b;
}
.container {
background-color: #ffffff;
padding: 20px;
border-radius: 8px;
box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}
h1, h2, h3 {
color: #8b5e3c;
}
.btn {
border: none;
}
.btn-primary {
background-color: #8b5e3c;
color: #fff;
}
.btn-primary:hover {
background-color: #6d482c;
}
.btn-secondary {
background-color: #c7a589;
color: #fff;
}
.btn-secondary:hover {
background-color: #b29276;
}
.btn-danger {
background-color: #a0522d;
color: #fff;
}
.btn-danger:hover {
background-color: #8b4513;
}
.table {
background-color: #fff;
}
.table th {
background-color: #8b5e3c;
color: #fff;
}
#profileInfo {
max-width: 700px;
margin: auto;
background-color: #fff9f2;
border: 1px solid #d4c4b1;
border-radius: 15px;
display: flex;
align-items: center;
padding: 20px;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
color: #5a3e1b;
font-family: 'Arial', sans-serif;
}
.profile-details{
margin-left: 10px ;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}
#profileInfo img {
width: 40%;
border-radius: 50%;
border: 3px solid #c7a589;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
margin-bottom: 20px;
}
#profileInfo .profile-content {
flex: 1;
text-align: center;
}
#profileInfo h2 {
font-size: 24px;
color: #8b5e3c;
margin-bottom: 10px;
}
#profileInfo p {
font-size: 14px;
margin: 5px 0;
}
#profileInfo .bio {
font-size: 14px;
color: #7a6a5a;
font-style: italic;
margin: 10px 0;
}
#profileInfo .location,
#profileInfo .service {
font-weight: bold;
color: #8b5e3c;
}
#profileInfo button {
background-color: #8b5e3c;
color: #fff;
border: none;
padding: 10px 20px;
font-size: 14px;
border-radius: 5px;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease;
margin-top: 15px;
}
#profileInfo button:hover {
background-color: #6d482c;
transform: scale(1.05);
}
.table tr:nth-child(even) {
background-color: #f7f3ed;
}
.alert-success {
background-color: #d4c4b1;
color: #5a3e1b;
border: 1px solid #b89c85;
}
.modal-content {
background-color: #f7f3ed;
}
label {
color: #8b5e3c;
}
select, input, textarea {
border: 1px solid #c7a589;
}
select:focus, input:focus, textarea:focus {
border-color: #8b5e3c;
box-shadow: 0 0 5px #c7a589;
}
.profile-card {
display: flex;
justify-content: center;
align-items: center;
width: 100%;
}
.email-display {
font-size: 16px;
color: #5a3e1b;
background-color: #fff9f2;
padding: 10px 15px;
border-radius: 8px;
display: inline-block;
border: 1px solid #d4c4b1;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
margin: 10px 0;
}
.email-display:hover {
background-color: #fef3e6;
border-color: #c7a589;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}
@media (max-width: 768px) {
#profileInfo {
flex-direction: column;
text-align: center;
}
#profileInfo img {
margin: 0 auto 20px;
}
.container {
padding: 15px;
}
button {
width: 100%;
}
table{
font-size: 1.5vw;
}
}
</style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; margin: 20px;">Welcome to your Dashboard</h1>

        <?php if ($message): ?>
            <div class="alert alert-success">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

 <div id="profileInfo">
    <?php if ($lawyer): ?>
        <img src="<?php echo $lawyer['images']; ?>" alt="Profile Image">
        <div class="profile-content">
            <h2><?php echo $lawyer['name']; ?></h2>
            <p class="location">📍 <?php echo $lawyer['location']; ?></p>
            <p class="service">⚖️ <?php echo ucfirst($lawyer['service_type']); ?> Law</p>
            <p class="email-display">
    📧 <?php echo $lawyer['email']; ?>
</p>

            <p class="bio">"<?php echo $lawyer['bio']; ?>"</p>
            <button id="editProfileBtn" class="btn" data-toggle="modal" data-target="#createProfileModal">Edit Profile</button>
        </div>
    <?php else: ?>
        <img src="https://via.placeholder.com/150" alt="No Profile Image">
        <div class="profile-content">
            <h2>No Profile</h2>
            <p>Create your profile to get started</p>
            <button id="createProfileBtn" class="btn btn-primary" data-toggle="modal" data-target="#createProfileModal">Create Profile</button>
        </div>
    <?php endif; ?>
</div>
                
       

        <h3 class="mt-5">Meetings Booked by Customers</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Meeting Date</th>
            <th>Meeting Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($book_meeting_result->num_rows > 0): ?>
            <?php while ($row = $book_meeting_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['meeting_date']; ?></td>
                    <td><?php echo $row['meeting_time']; ?></td>
                    <td>
    <?php 
        if ($row['status'] == 'confirmed') {
            echo "<span style='color: green; font-weight: bold;'>Approved</span>";
        } elseif ($row['status'] == 'canceled') {
            echo "<span style='color: red; font-weight: bold;'>Canceled</span>";
        } elseif ($row['status'] == 'pending') {
            echo "<span style='color: orange; font-weight: bold;'>Pending</span>";
        }
    ?>
</td>
<td >
    <?php 
        if ($row['status'] !== 'confirmed') {
            echo '<a href="update_status.php?id=' . $row['id'] . '&status=confirmed" class="btn btn-success btn-sm">Approve</a>';
        }

        if ($row['status'] !== 'canceled') {
            echo '<a style="margin-left:5px;" href="update_status.php?id=' . $row['id'] . '&status=canceled" class="btn btn-danger btn-sm">Cancel</a>';
        }
    ?>
</td>


                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No meetings booked yet.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <div class="modal fade" id="createProfileModal" tabindex="-1" role="dialog" aria-labelledby="createProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createProfileModalLabel">Create/Edit Your Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="createProfileForm" method="POST" >
    <input type="hidden" name="user_id" value="<?php echo $lawyer['user_id'] ?? ''; ?>">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required value="<?php echo $lawyer['name'] ?? ''; ?>">
    </div>
    <div class="form-group">
        <label for="name">Email</label>
        <input type="email" class="form-control" id="name" name="email" required value="<?php echo $lawyer['email'] ?? ''; ?>">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <select name="location" id="location" class="form-control" required>
            <option value="">Select Location</option>
            <option value="Karachi" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Karachi') ? 'selected' : ''; ?>>Karachi</option>
            <option value="Lahore" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Lahore') ? 'selected' : ''; ?>>Lahore</option>
            <option value="Islamabad" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Islamabad') ? 'selected' : ''; ?>>Islamabad</option>
            <option value="Rawalpindi" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Rawalpindi') ? 'selected' : ''; ?>>Rawalpindi</option>
            <option value="Peshawar" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Peshawar') ? 'selected' : ''; ?>>Peshawar</option>
            <option value="Quetta" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Quetta') ? 'selected' : ''; ?>>Quetta</option>
            <option value="Faisalabad" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Faisalabad') ? 'selected' : ''; ?>>Faisalabad</option>
            <option value="Multan" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Multan') ? 'selected' : ''; ?>>Multan</option>
            <option value="Gujranwala" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Gujranwala') ? 'selected' : ''; ?>>Gujranwala</option>
            <option value="Sialkot" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Sialkot') ? 'selected' : ''; ?>>Sialkot</option>
            <option value="Bahawalpur" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Bahawalpur') ? 'selected' : ''; ?>>Bahawalpur</option>
            <option value="Sukkur" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Sukkur') ? 'selected' : ''; ?>>Sukkur</option>
            <option value="Hyderabad" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Hyderabad') ? 'selected' : ''; ?>>Hyderabad</option>
            <option value="Murree" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Murree') ? 'selected' : ''; ?>>Murree</option>
            <option value="Sargodha" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Sargodha') ? 'selected' : ''; ?>>Sargodha</option>
            <option value="Mardan" <?php echo (isset($lawyer['location']) && $lawyer['location'] == 'Mardan') ? 'selected' : ''; ?>>Mardan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="service_type">Service Type</label>
        <select name="service_type" id="service_type" class="form-control" required>
            <option value="criminal" <?php echo (isset($lawyer['service_type']) && $lawyer['service_type'] == 'criminal') ? 'selected' : ''; ?>>Criminal</option>
            <option value="divorce" <?php echo (isset($lawyer['service_type']) && $lawyer['service_type'] == 'divorce') ? 'selected' : ''; ?>>Divorce</option>
            <option value="affidavit" <?php echo (isset($lawyer['service_type']) && $lawyer['service_type'] == 'affidavit') ? 'selected' : ''; ?>>Affidavit</option>
            <option value="civil" <?php echo (isset($lawyer['service_type']) && $lawyer['service_type'] == 'civil') ? 'selected' : ''; ?>>Civil</option>
        </select>
    </div>

    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea class="form-control" id="bio" name="bio" required><?php echo $lawyer['bio'] ?? ''; ?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Upload Profile Image:</label><br>
        <input type="file" id="image" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save Profile</button>

</form>
                </div>
            </div>
        </div>
    </div>

    <script>
$(document).ready(function() {
    $('#createProfileForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'create_profile.php',  
            data: new FormData(this),  
            processData: false, 
            contentType: false, 
            success: function(response) {
                const result = JSON.parse(response); 
                if (result.error) {
                    alert(result.error); 
                } else {
                    $('#profileInfo').html(`
    <div class="profile-card">
        <img 
            src="${result.profile.images}" 
            alt="Profile Image" 
            class="profile-image"
            style="margin-right: 30px;"
        >
        <div class="profile-details">
            <h2>${result.profile.name}</h2>
             <p class="location">📍 ${result.profile.location}</p>
            <p class="service">⚖️ ${result.profile.service_type} Law</p>
            <p class="email-display">📧 ${result.profile.email}</p>
            <p class="bio">" ${result.profile.bio} "</p>
            <button id="editProfileBtn" class="btn btn-secondary" data-toggle="modal" data-target="#createProfileModal">Edit Profile</button>
        </div>
    </div>
`);

                    $('#createProfileModal').modal('hide');
                }
            },
            error: function(xhr, status, error) {
                console.log("Error in AJAX request: ", error);  
            }
        });
    });
});

    </script>
</body>
</html>
