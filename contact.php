<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $Name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $Email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $Message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // Validate form fields
    if (empty($Name)) {
        $errors[] = 'Name is empty';
    }
    else {
        $errors[] = 'Name is not empty';
    }

    if (empty($Email)) {
        $errors[] = 'Email is empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($Message)) {
        $errors[] = 'Message is empty';
    }

    // If no errors, send email
    if (empty($errors)) {
        // Recipient email address (replace with your own)
        $recipient = "kaicachen@gmail.com";

        // Additional headers
        $headers = "From: $Name <$Email>";

        // Send email
        if (mail($recipient, $Message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        // Display errors
        echo "The form contains the following errors:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
} else {
    // Not a POST request, display a 403 forbidden error
    header("HTTP/1.1 403 Forbidden");
    echo "You are not allowed to access this page.";
}
