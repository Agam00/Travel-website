<?php
// Include database connection file
include_once("db_config.php");

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, start session
            session_start();
            $_SESSION['username'] = $username;
            // Redirect to home.php
            header("Location: home.php");
            // exit(); // Ensure that script execution stops here to prevent further output
        } else {
            echo "<script>alert('Invalid Password.');</script>";
            echo "<script>window.location = 'login_html.php';</script>";
        }
    } else {
            echo "<script>alert('User not found.');</script>";
            echo "<script>window.location = 'login_html.php';</script>";

        // echo "User not found";
    }
    
    $conn->close();
}
?>

