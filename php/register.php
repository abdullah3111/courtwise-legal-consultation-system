<?php
include 'db_connect.php';
include 'session_check.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $email = $_POST['email'];

    // Check if email and username exist in the database
    $email_check_query = "SELECT * FROM Users WHERE email = '$email' LIMIT 1";
    $result_email_check = mysqli_query($conn, $email_check_query);
    $email_exists = mysqli_num_rows($result_email_check) > 0;

    $username_check_query = "SELECT * FROM Users WHERE username = '$username' LIMIT 1";
    $result_username_check = mysqli_query($conn, $username_check_query);
    $username_exists = mysqli_num_rows($result_username_check) > 0;

    // Display appropriate error messages
    if ($email_exists) {
        echo "Error: This email is already registered.";
    } elseif ($username_exists) {
        echo "Error: This username is already taken.";
    } else {
        // Insert new user record
        $sql = "INSERT INTO Users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
<style>
body{
background-image: url('../images/tos.jpg');
background-repeat: no-repeat;
background-size: cover;
display: flex
;
justify-content: center;
align-items: center;
}
#registrationForm {
width: 350px;
margin: 50px auto;
padding: 20px;
background-color: #5d636961;
border: 2px solid #2a211d;
border-radius: 8px;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
font-family: Arial, sans-serif;
color: white;
}
#registrationForm h2 {
text-align: center;
color: black;
margin-bottom: 20px;
font-size: 1.8em;
font-weight: bold;
}
#registrationForm input[type="text"],
#registrationForm input[type="email"],
#registrationForm input[type="password"],
#registrationForm select {
width: 100%;
padding: 10px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 5px;
font-size: 1em;
color: #555;
background-color: #f9f9f9;
}
#registrationForm input[type="text"]:focus,
#registrationForm input[type="email"]:focus,
#registrationForm input[type="password"]:focus,
#registrationForm select:focus {
outline: none;
border-color: #3498db;
box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}
#registrationForm span {
display: block;
font-size: 0.9em;
color: #e74c3c;
margin-bottom: 5px;
}
#registrationForm button[type="submit"] {
width: 100%;
padding: 12px;
border: none;
border-radius: 5px;
background-color: #2a211d;
color: #ffffff;
font-weight: bold;
font-size: 1em;
cursor: pointer;
transition: background-color 0.3s ease;
}
#registrationForm button[type="submit"]:hover {
background-color: #b69d74;
}
.login-link {
text-align: center;
margin-top: 15px;
font-size: 0.9em;
color: white;
}
.login-link a {
color: black;
text-decoration: none;
font-weight: bold;
transition: color 0.3s ease;
}
.login-link a:hover {
color: #b69d74;
}
@media and (max-width: 400px) {
#registrationForm {
width: 90%;
}
}
</style>

<form id="registrationForm" method="POST" action="register.php">
    <h2>Create an Account</h2>
    
    Username: <input type="text" name="username" id="username" required>
    <span id="usernameError" style="color: red;"></span><br>
    
    Email: <input type="email" name="email" id="email" required>
    <span id="emailError" style="color: red;"></span><br>
    
    Password: <input type="password" name="password" required><br>
    
    Role:
    <select name="role">
        <option value="customer">Customer</option>
        <option value="lawyer">Lawyer</option>
        <option value="admin">Admin</option>
    </select>
    
    <button type="submit">Register</button>
    
    <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
</form>
<script>
document.getElementById("email").addEventListener("blur", function() {
    var email = document.getElementById("email").value;
    if (email !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "check_email.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = xhr.responseText;
                if (response === "exists") {
                    document.getElementById("emailError").textContent = "This email is already registered.";
                    document.getElementById("registrationForm").querySelector('button').disabled = true;
                } else {
                    document.getElementById("emailError").textContent = "";
                    document.getElementById("registrationForm").querySelector('button').disabled = false;
                }
            }
        };
        xhr.send("email=" + email);
    }
});

document.getElementById("username").addEventListener("blur", function() {
    var username = document.getElementById("username").value;
    if (username !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "check_username.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = xhr.responseText;
                if (response === "exists") {
                    document.getElementById("usernameError").textContent = "This username is already taken.";
                    document.getElementById("registrationForm").querySelector('button').disabled = true;
                } else {
                    document.getElementById("usernameError").textContent = "";
                    document.getElementById("registrationForm").querySelector('button').disabled = false;
                }
            }
        };
        xhr.send("username=" + username);
    }
});
</script>
