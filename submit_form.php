<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $demoLink = $_POST["demo-link"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "ayush.musicpromo@gmail.com"; // Replace with your email address
    $subject = "Demo Feedback Submission";
    $headers = "From: $email";

    // Compose email body
    $body = "Email: $email\n\n";
    $body .= "Demo Link: $demoLink\n\n";
    $body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect to a thank you page
    header("Location: thank_you.html"); // Create a thank_you.html file
    exit;
}
?>