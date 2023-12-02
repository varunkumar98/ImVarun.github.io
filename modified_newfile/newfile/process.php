<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $name = !empty($_POST["name"]) ? $_POST["name"] : "";
    $email = !empty($_POST["email"]) ? $_POST["email"] : "";
    $message = !empty($_POST["message"]) ? $_POST["message"] : "";

    // Basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        die("Invalid email address");
    }

    // Set email parameters
    $to = "varunk0816101@gmail.com";  // Replace with your Gmail address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Attempt to send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        // Handle email sending failure
        echo "Failed to send email";
    }
}
?>