<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "hnguyen@college.harvard.edu";
    $subject = "New message from $firstName $lastName";
    $body = "You have received a new message:\n\nName: $firstName $lastName\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Message could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>
