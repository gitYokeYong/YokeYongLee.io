<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set your Gmail email address to receive the messages
    $to = 'yokyongleee@gmail.com';

    // Email subject
    $subject = 'New message from ' . $name;

    // Email message
    $email_message = 'Name: ' . $name . "\n";
    $email_message .= 'Email: ' . $email . "\n";
    $email_message .= 'Message: ' . $message;

    // Headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank-you page or show a success message
    header('Location: thank_you.html');
}
?>
