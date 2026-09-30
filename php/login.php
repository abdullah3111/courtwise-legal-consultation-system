<?php
session_start();
include 'db_connect.php';
include 'session_check.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if (isset($_GET['redirect']) && $_GET['redirect'] === 'book_meeting') {
                $lawyer_id = $_GET['lawyer_id']; 
                header("Location: book_meeting.php?loggedin=true&lawyer_id=$lawyer_id");
                exit();
            } else {
                switch ($_SESSION['role']) {
                    case 'lawyer':
                        header("Location: lawyer_dashboard.php");
                        exit();

                    case 'customer':
                        header("Location: customer_dashboard.php");
                        exit();

                    case 'admin':
                        header("Location: admin_dashboard.php");
                        exit();

                    default:
                        echo "Unknown role. Access denied.";
                        exit();
                }
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
}
?>
<style>
body{
background-image: url('../images/to.jpg');
background-repeat: no-repeat;
background-size: 100% 100vh;
display: flex
;
justify-content: center;
align-items: center;
}
.login-form {
width: 320px;
margin: 60px auto;
padding: 30px;
background-color: #5d636961;
border-radius: 8px;
box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
font-family: Arial, sans-serif;
border: 2px solid #2a211d;
}
.login-form h2 {
text-align: center;
color: white;
margin-bottom: 10px;
font-size: 1.8em;
font-weight: bold;
}
.login-form .welcome-text {
text-align: center;
color: white;
font-size: 1em;
margin-bottom: 20px;
}
.login-form label {
display: block;
margin-bottom: 6px;
font-size: 1em;
color:white;
}
.login-form input[type="text"],
.login-form input[type="password"] {
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ddd;
border-radius: 5px;
font-size: 1em;
color: #555;
background-color: #f9f9f9;
transition: border-color 0.3s ease;
}
.login-form input[type="text"]:focus,
.login-form input[type="password"]:focus {
outline: none;
border-color: #3498db;
box-shadow: 0 0 5px rgba(52, 152, 219, 0.2);
}
.login-form button[type="submit"] {
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
.login-form button[type="submit"]:hover {
background-color: #2980b9;
}
.login-form .register-link {
text-align: center;
margin-top: 15px;
font-size: 0.9em;
color: #c7c7c7;
}
.login-form .register-link a {
color: wheat;
text-decoration: none;
font-weight: bold;
}
.login-form .register-link a:hover {
text-decoration: underline;
}
</style>

<form class="login-form" method="POST" action="login.php">
    <h2>Login</h2>
    <p class="welcome-text">Welcome back! Please enter your credentials to log in.</p>
    
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">Login</button>
    
    <p class="register-link">
        Don't have an account? <a href="register.php">Register now</a>
    </p>
</form>

