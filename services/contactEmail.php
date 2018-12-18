<?php
    $to      = 'info@pazarealestate.com, pabloglez40@gmail.com';
    $subject = 'Formulario de contacto';
    $message = "Name: " . $_POST['name'] . "\r\n" . "e-mail: " . $_POST['email'] . "\r\n" . "Phone: " . $_POST['phone'] . "\r\n\r\n" . $_POST['message'];
    $headers = 'From: no- reply@pazarealestate.com' . "\r\n" .
        'Reply-To: no-reply@pazarealestate.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
?>