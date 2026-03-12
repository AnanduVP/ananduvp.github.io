<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = escapeshellarg($_POST['name']);
    $email = escapeshellarg($_POST['email']);
    $message = escapeshellarg($_POST['message']);

    // Recipient email
    $to = "your-email@example.com"; // Replace with your email

    // Subject
    $subject = "New Contact Form Submission";

    // Email body
    $body = "Name: " . $_POST['name'] . "\n";
    $body .= "Email: " . $_POST['email'] . "\n";
    $body .= "Message:\n" . $_POST['message'];

    // Option 1: Using PHP mail()
    $headers = "From: " . $_POST['email'] . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }

    // Option 2: Using bash script (sendmail via command line)
    // Make sure sendmail.sh has executable permission
    // exec("/path/to/sendmail.sh $name $email $message");
}
?>
