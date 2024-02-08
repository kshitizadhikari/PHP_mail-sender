<?php
require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'adhikarikshitiz12@gmail.com';
$mail->Password = 'rrng qogp wfoh purf';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('adhikarikshitiz12@gmail.com', 'Kshitiz Adhikari');
$mail->addAddress($_POST['email']);

// Add CC and BCC recipients if needed
// $mail->addCC('cc@example.com', 'CC Name');
// $mail->addBCC('bcc@example.com', 'BCC Name');

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['msg'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
    header("Location: success.php");
}
