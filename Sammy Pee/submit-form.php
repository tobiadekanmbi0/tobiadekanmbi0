<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $event = htmlspecialchars($_POST['event']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "olasammy@yahoo.com";  // Change this to your email
    $subject = "New Booking Request from $name";
    $body = "Name: $name\nEmail: $email\nEvent: $event\nMessage: $message";
    $headers = "From: $email";

    // Send email and redirect to thank-you page
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "<script>alert('Failed to send request. Please try again.'); window.history.back();</script>";
    }
}
?>