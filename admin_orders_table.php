<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Orders</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to fetch orders
$query = "SELECT * FROM book_form";
$result = mysqli_query($connection, $query);

// Check if there are any orders
if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrival Date</th>
                <th>Leaving Date</th>
            </tr>";
    // Loop through each row in the result set
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['location']}</td>
                <td>{$row['guests']}</td>
                <td>{$row['arrivals']}</td>
                <td>{$row['leaving']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No orders found.";
}

// Close connection
mysqli_close($connection);
?>

</body>
</html>
