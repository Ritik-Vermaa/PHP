<?php
session_start();

$sessionTimeout = 60; // 1 minute 

if (isset($_SESSION['last_activity'])) {
    // calculate the time difference between now and last activity
    $inactiveTime = time() - $_SESSION['last_activity'];
    echo " login";

    // check inactive time 
    if ($inactiveTime >= $sessionTimeout) {
        // destroy the session and logout the user
        session_unset();
        session_destroy();
        header("Location: logout.php"); // logout page
        exit();
    }
}

// update the last activity timestamp
$_SESSION['last_activity'] = time();
?>
