<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If using Composer, use autoload

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
            // Create an instance of PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP(); // Send using SMTP
                $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'codermishra53@gmail.com'; // Your Gmail address
                $mail->Password = 'ymhy wkhe tskr bwwe'; // Use your Gmail app-specific password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
                $mail->Port = 587; // TCP port to connect to

                // Recipients
                $mail->setFrom('codermishra53@gmail.com', 'THF Kitchens');
                $mail->addAddress($email); // Add the recipient (the person who filled the form)

                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'Thank you for contacting THF Kitchens!';
                $mail->Body = "
                    Hi $name,
                    <br><br>
                    Thank you for reaching out to us! We have received your message.
                    <br><br>
                    Here's what you sent:
                    <ul>
                        <li><strong>Name:</strong> $name</li>
                        <li><strong>Company:</strong> $company</li>
                        <li><strong>Phone:</strong> $phone</li>
                        <li><strong>City:</strong> $city</li>
                        <li><strong>Message:</strong> $message</li>
                    </ul>
                    <br><br>
                    We will get back to you as soon as possible.
                    <br><br>
                    Best Regards,<br>
                    THF Kitchens Team
                ";

                // Send the email
                $mail->send();
                echo "<p>Thank you! Your message has been received, and a confirmation email has been sent to you.</p>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            // Display SQL error if the query fails
            echo "<p>Error inserting data: " . $conn->error . "</p>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
