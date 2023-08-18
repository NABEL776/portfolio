<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "anafunabelruth@gmail.com"; // Replace with your email address
    $subject = "New Form Submission from $name";
    $headers = "From: $email";

    // Compose the email body
    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n\n";
    $emailBody .= "Message:\n$message";

    // Send the email
    $success = mail($to, $subject, $emailBody, $headers);

    if ($success) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>