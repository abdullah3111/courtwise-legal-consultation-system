<?php
include 'db_connect.php';
include 'session_check.php'; 

$lawyer_id = $_GET['id'];
$sql = "SELECT * FROM Lawyers WHERE id='$lawyer_id'";
$result = mysqli_query($conn, $sql);
$lawyer = mysqli_fetch_assoc($result);


echo "<div class='lawyer-profile'>";
echo "<div class='lawyer-image'>";
echo "<img src='" . $lawyer["images"] . "' alt='no img' width='130px'>";
echo "</div>";
echo "<div class='lawyer-details'>";
echo "<h2>" . $lawyer['name'] . "</h2>";
echo "<p>Location: " . $lawyer['location'] . "</p>";
echo "<p>Specialty: " . $lawyer['service_type'] . "</p>";
echo "<p>Email: " . $lawyer['email'] . "</p>";

echo "<p>Bio: " . $lawyer['bio'] . "</p>";
echo "</div>";

echo "</div>";
echo "<div class='pros'>";
echo '
<button type="button" id="openModalButton" class="btn btn-success" data-toggle="modal" data-target="#bookMeetingModal" onclick="setModalData(' . $lawyer['id'] . ', \'' . addslashes($lawyer['name']) . '\')">
    Book Meeting
</button>';
echo "</div>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images\court.png" type="image/x-icon">

  <title>CourtWise &mdash; Lawyer Profile</title>
  <style>
body {
font-family: 'Arial', sans-serif;
background-color: #f9f9f9;
padding: 20px;
color: #333;
}
.pros {
display: flex;
justify-content: center;
align-items: center;
}
h2 {
color: #3b3a36;
margin-bottom: 20px;
}
.lawyer-profile {
display: flex;
align-items: flex-start;
margin: 30px auto;
border: 2px solid #d5b48a;
border-radius: 12px;
padding: 30px;
background-color: #ffffff;
box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
max-width: 800px;
justify-content: center;
align-items: center;
}
.lawyer-image {
margin-right: 30px;
max-width: 35%;
}
.lawyer-image img {
border-radius: 8px;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
width: 100%;
}
.lawyer-details {
flex: 1;
}
.lawyer-details h2 {
font-size: 26px;
margin-bottom: 10px;
color: #3b3a36;
}
.lawyer-details p {
font-size: 18px;
color: #5a5a5a;
margin-bottom: 15px;
}
.lawyer-details p strong {
color: #3b3a36;
}
p {
font-size: 16px;
color: #5a5a5a;
}
.modal-header {
background-color: #3b3a36;
color: #fff;
}
.modal-title {
font-size: 1.5rem;
}
.modal-body {
padding: 30px;
}
.form-group label {
font-weight: bold;
color: #3b3a36;
}
.form-control {
border-radius: 5px;
border: 1px solid #ccc;
margin-bottom: 15px;
}
.btn-primary {
background-color: #2d231f !important;
border-color: #2d231f !important;
color: wheat;
cursor: pointer;
}
.btn-primary:hover {
background-color: #31b0d5;
border-color: #31b0d5;
}
.btn-success {
background-color: #28a745;
border-color: #28a745;
}
.btn-success:hover {
background-color: #218838;
border-color: #1e7e34;
}
.modal-content {
border-radius: 10px;
}
#bookMeetingModal {
z-index: 1050;
}
#openModalButton {
margin-top: 10px;
padding: 10px 20px;
background-color: #3b3a36;
border: 2px solid #d5b48a;
color: white;
cursor: pointer;
font-size: 16px;
}
#openModalButton:hover {
background-color: #d5b48a;
color: #3b3a36;
}
.modal-content {
border-radius: 15px;
background-color: #fdfcf9;
border: none;
box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
color: #333;
}
.modal-header {
background-color: #3b3a36;
border-bottom: none;
color: #fff;
border-radius: 15px 15px 0 0;
padding: 20px;
display: flex;
justify-content: space-between;
}
.modal-header .close {
color: #fff;
opacity: 1;
background: #3b3a36;
outline: none;
border: none;
cursor: pointer;
height: 33px;
font-size: 1.4rem;
text-shadow: none;
}
.modal-body {
padding: 30px;
}
.form-group label {
font-weight: bold;
color: #333;
}
.form-control {
border-radius: 8px;
border: 1px solid #ddd;
padding: 12px;
font-size: 16px;
}
.form-control:focus {
border-color: #5bc0de;
box-shadow: 0 0 5px rgba(91, 192, 222, 0.5);
}
.btn-primary {
background-color: #6c63ff;
border-color: #6c63ff;
padding: 12px 25px;
font-size: 18px;
font-weight: bold;
border-radius: 50px;
transition: background-color 0.3s ease;
}
.btn-primary:hover {
background-color: #5548c8;
border-color: #5548c8;
}
.modal-dialog {
max-width: 500px;
margin: 30px auto;
}
@media (max-width: 768px) {
.modal-content {
padding: 20px;
}
}
@media (max-width: 991px) {
.lawyer-profile {
flex-direction: column;
flex-wrap: wrap;
justify-content: center;
align-items: center;
}
.lawyer-image {
max-width: 50%;
}
}
</style>

</head>
<body>


<div class="modal fade" style="display:none;" id="bookMeetingModal" tabindex="-1" role="dialog" aria-labelledby="bookMeetingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookMeetingModalLabel">Book a Meeting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="book_meeting.php">
                    <input type="hidden" name="lawyer_id" id="modalLawyerId">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="modalEmail" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="modalPhone" class="form-control" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="meeting_date">Meeting Date</label>
                        <input type="date" name="meeting_date" id="modalMeetingDate" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="meeting_time">Meeting Time</label>
                        <input type="time" name="meeting_time" id="modalMeetingTime" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $("#openModalButton").on("click", function() {
        $("#bookMeetingModal").show();
    });

    $(".close").on("click", function() {
        $("#bookMeetingModal").hide();
    });
});
</script>
<script>

function setModalData(lawyerId, lawyerName) {

    document.getElementById('modalLawyerId').value = lawyerId;

    document.getElementById('bookMeetingModalLabel').innerText = 'Book a Meeting with ' + lawyerName;

    document.getElementById('modalEmail').value = ''; 
    document.getElementById('modalPhone').value = ''; 
    document.getElementById('modalMeetingDate').value = ''; 
    document.getElementById('modalMeetingTime').value = ''; 

  
}
</script>
</body>
</html>