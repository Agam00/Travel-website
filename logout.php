<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
echo "<script>alert('logged out successfully.');</script>";
echo "<script>window.location = 'login_html.php';</script>";

// Redirect to login page after logout
// header("Location: login_html.php");
exit();
?>