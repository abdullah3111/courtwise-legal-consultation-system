<?php


$timeout_duration = 400; 

if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];

    if ($elapsed_time > $timeout_duration) {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>
        alert('Session Expired ... Login Again');
        window.location.href = '../index.php';  
    </script>";
        exit();
    }
}

$_SESSION['last_activity'] = time();
?>
