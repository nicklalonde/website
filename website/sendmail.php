<?php
// Get form data
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email address to send the message to
$to = 'the@nicklalonde.com';

// Construct email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Construct email message
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Phone: $phone\n";
$email_message .= "Subject: $subject\n\n";
$email_message .= "Message:\n$message";

// Send email
$mail_sent = mail($to, $subject, $email_message, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    echo "Thank you for your message. We will get back to you soon!";
} else {
    echo "Oops! Something went wrong and we couldn't send your message.";
}
?>