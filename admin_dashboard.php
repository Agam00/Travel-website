<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password are correct
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match the admin credentials
    if ($username === 'admin' && $password === 'adminpassword') {
        // Set session variables to indicate the admin is logged in
        $_SESSION['admin_logged_in'] = true;

        // Redirect to the admin orders page
        header("Location: admin_orders_table.php");
        exit();
    } else {
        // If username or password is incorrect, show error message
        echo "Invalid username or password. Please try again.";
    }
}
?>
