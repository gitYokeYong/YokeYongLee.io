mail.php  $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message']) === true) {
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    if (empty($name) === true) {
        $errors['name'][] = 'Name is empty';
    } elseif (ctype_alpha($name) === false) {
        $errors['name'][] = 'Name contains invalid characters';
    }

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (empty($email) === true) {
        $errors['email'][] = 'E-mail is empty';
    } elseif ($email === false) {
        $errors['email'][] = 'Invalid e-mail address';
    }

    $message = strip_tags(trim($_POST['message']));

    if (empty($message) === true) {
        $errors['message'][] = 'Message is empty';
    }

    if (count($errors) === 0) {
        echo 'Thank you!';
        // you can use here the sanitized user input to send the e-mail
    }
}

if (count($errors) > 0) {
    foreach ($errors as $field => $messages) {
        echo implode(', ', $messages), '<br>';
    }
} <?php $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message']) === true) {
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    if (empty($name) === true) {
        $errors['name'][] = 'Name is empty';
    } elseif (ctype_alpha($name) === false) {
        $errors['name'][] = 'Name contains invalid characters';
    }

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (empty($email) === true) {
        $errors['email'][] = 'E-mail is empty';
    } elseif ($email === false) {
        $errors['email'][] = 'Invalid e-mail address';
    }

    $message = strip_tags(trim($_POST['message']));

    if (empty($message) === true) {
        $errors['message'][] = 'Message is empty';
    }

    if (count($errors) === 0) {
        echo 'Thank you!';
        // you can use here the sanitized user input to send the e-mail
    }
}

if (count($errors) > 0) {
    foreach ($errors as $field => $messages) {
        echo implode(', ', $messages), '<br>';
    }
} 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set your Gmail email address to receive the messages
    $to = 'yokeyongleee@gmail.com';

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
