<?php
// Get the form data
$name = $_POST['name'];
$message = $_POST['message'];

// Set up the recipient email address
$to = 'abhinavbrdj7802@gmail.com'; // Your email address

// Set up the email subject
$subject = 'Feedback from ' . $name;

// Construct the email message
$body = "Name: $name\n\nMessage:\n$message";

// Set up the email headers
$headers = "From: feedback@example.com\r\n";
$headers .= "Reply-To: $name <$to>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    http_response_code(200);
    echo "Feedback sent successfully";
} else {
    // Failed to send email
    http_response_code(500);
    echo "Error sending feedback";
}
?>
