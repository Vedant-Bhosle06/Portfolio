<?php
// src/backend/contact_form.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Include the PHPMailer autoloader

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('All fields are required!');</script>";
        exit;
    }

    // Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                      // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;               // Enable SMTP authentication
        $mail->Username   = 'vedantbhosle2006@gmail.com';  // Your email
        $mail->Password   = 'iwii cqju foqa tytu';  // Your email password (use App Passwords if using 2FA)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587;               // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);  // Set the sender's email and name
        $mail->addAddress('vedantbhosle2006@gmail.com');  // Add recipient's email (where the form submits)

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body    = "
            <html>
                <body>
                    <h2>Contact Form Submission</h2>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Message:</strong></p>
                    <p>$message</p>
                </body>
            </html>
        ";

        // Send email
        if ($mail->send()) {
            echo "<script>alert('Thank you for your message. I\'ll get back to you soon!');</script>";
        } else {
            echo "<script>alert('Sorry, something went wrong. Please try again later.');</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
