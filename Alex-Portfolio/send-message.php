<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.html");
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");


/* Validate required fields */

if ($name === "" || $email === "" || $subject === "" || $message === "") {
    header("Location: contact.html?status=error");
    exit;
}


/* Validate email */

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.html?status=invalid-email");
    exit;
}


/* Your email address */

$to = "wawerue688@gmail.com";


/* Email content */

$email_subject = "Portfolio Contact: " . $subject;

$email_body = "You received a new message from your portfolio.\n\n";

$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Subject: " . $subject . "\n\n";
$email_body .= "Message:\n";
$email_body .= $message;


/* Email headers */

$headers = "From: Portfolio Contact <noreply@yourdomain.com>\r\n";
$headers .= "Reply-To: " . $email . "\r\n";


/* Send email */

if (mail($to, $email_subject, $email_body, $headers)) {

    header("Location: contact.html?status=success");
    exit;

} else {

    header("Location: contact.html?status=failed");
    exit;

}

?>