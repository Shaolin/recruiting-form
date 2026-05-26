<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST['fullname']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $location = htmlspecialchars($_POST['location']);
    $reason = htmlspecialchars($_POST['reason']);

    $to = "agozieokolo2@gmail.com";
    $subject = "New Activator Application";

    $message = "
New Application Received:

Full Name: $fullname
WhatsApp: $whatsapp
Location: $location

Reason:
$reason
";

    $headers = "From: noreply@geneith.com";

    $send = mail($to, $subject, $message, $headers);

    if ($send) {
        header("Location: success.php");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }

} else {
    header("Location: error.php");
    exit();
}