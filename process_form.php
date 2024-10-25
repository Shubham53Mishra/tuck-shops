<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = 'localhost'; // Your MySQL hostname
$db = 'thf_kitchens'; // Your database name
$user = 'root'; // Your MySQL username
$pass = ''; // Your MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = $conn->real_escape_string(trim($_POST['name']));
    $company = $conn->real_escape_string(trim($_POST['company']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $phone = $conn->real_escape_string(trim($_POST['phone']));
    $city = $conn->real_escape_string(trim($_POST['city']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Ensure that required fields are not empty
    if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($message)) {
        echo "<p>Error: All fields are required.</p>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO contactformsubmissions (name, company, email, phone, city, message)
                VALUES ('$name', '$company', '$email', '$phone', '$city', '$message')";

        // Check if query executed successfully
        if ($conn->query($sql) === TRUE) {
            echo "<p>Thank you! Your message has been received.</p>";
        } else {
            // Display SQL error if the query fails
            echo "<p>Error inserting data: " . $conn->error . "</p>";
        }
    }
    // Close the connection
    $conn->close();
}
?>
