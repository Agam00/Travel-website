<?php
// Include database connection file
include_once("db_config.php");

// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Insert user data into database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful, display success message and redirect to login page
        echo "<script>alert('Registration successful. You can now login.');</script>";
        echo "<script>window.location = 'login_html.php';</script>";
        exit(); // Make sure to stop executing the current script after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>


