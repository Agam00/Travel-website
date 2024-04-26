<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    // Validation
    $errors = array();

    // Check if required fields are empty
    $required_fields = array('name', 'email', 'phone', 'address', 'location', 'guests', 'arrivals', 'leaving');
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "Field '{$field}' is required.";
        }
    }

    // Validate email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate phone number (assuming a simple pattern of 10 digits)
    if (!preg_match("/^\d{10}$/", $_POST['phone'])) {
        $errors[] = "Invalid phone number format (10 digits required).";
    }

    // Validate guests count
    if ($_POST['guests'] <= 0) {
        $errors[] = "Number of guests must be greater than 0.";
    }

    // Validate location
    if ($_POST['location'] == 'Select location') {
        $errors[] = "Please select a location.";
    }

    // Validate arrival and leaving dates
    $arrival_date = strtotime($_POST['arrivals']);
    $leaving_date = strtotime($_POST['leaving']);
    if ($arrival_date >= $leaving_date) {
        $errors[] = "Arrival date must be before leaving date.";
    }

    // If there are no errors, proceed with insertion
    if (empty($errors)) {
        // Escape user inputs for security
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        $location = mysqli_real_escape_string($connection, $_POST['location']);
        $guests = mysqli_real_escape_string($connection, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
        $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

        // Attempt insert query execution
        $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        if (mysqli_query($connection, $request)) {
            // Delay redirect for 2 seconds
            header("refresh:10; url=book.php");
            echo "Thank you! we have recieved your request we will contact you shortly. have a safe journey with us<br>If not redirected automatically or after 10 secs, <a href='book.php'>click here</a>.";
        } else {
            echo "ERROR: Could not able to execute $request. " . mysqli_error($connection);
        }

        // Close connection
        mysqli_close($connection);
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        // Calculate remaining time (10 seconds)
        $remaining_time = 10;
        // Display remaining time
        echo "Redirecting in <span id='countdown'>$remaining_time</span> seconds...<br>If not redirected automatically, <a href='book.php'>click here</a>.";
        // Redirect back to booking page after 10 seconds
        header("refresh:$remaining_time; url=book.php");
    }
} else {
    echo 'Something went wrong. Please try again.';
}
?>

<script>
// Countdown timer
var countdown = <?php echo $remaining_time; ?>;
var timer = setInterval(function() {
    countdown--;
    document.getElementById('countdown').innerHTML = countdown;
    if (countdown <= 0) {
        clearInterval(timer);
    }
}, 1000);
</script>
