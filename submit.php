<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST['fullname']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $location = htmlspecialchars($_POST['location']);
    $reason = htmlspecialchars($_POST['reason']);

    $mail = new PHPMailer(true);

    try {

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host = 'mail.sawoflow.com.ng';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@sawoflow.com.ng';
        $mail->Password = 'theumbrellaman';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // SENDER
        $mail->setFrom('noreply@sawoflow.com.ng', 'Recruitment Form');

        // RECEIVERS
        $mail->addAddress('agozieokolo2@gmail.com');

        // EMAIL CONTENT
        $mail->isHTML(false);

        $mail->Subject = 'New Activator Application';

        $mail->Body = "
New Application Received:

Full Name: $fullname

WhatsApp: $whatsapp

Location: $location

Reason:
$reason
        ";

        $mail->send();

        header("Location: success.php");
        exit();

    } catch (Exception $e) {

        header("Location: error.php");
        exit();

    }

} else {

    header("Location: error.php");
    exit();

}