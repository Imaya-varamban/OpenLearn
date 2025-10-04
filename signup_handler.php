<?php
phpinfo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email details
    $to = "openlearnofficial@gmail.com"; // Replace with your email address
    $subject = "New Signup Attempt";
    $message = "Username: $username\nEmail: $email\nPassword: $password";
    $headers = "From: no-reply@openlearn.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Details have been sent to your email.";
    } else {
        echo "Failed to send email.";
    }
}
?>