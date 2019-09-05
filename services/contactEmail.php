<?php
    $to      = 'info@pazarealestate.com, pabloglez40@gmail.com, mariely@pazarealestate.com';
    $subject = 'Formulario de contacto';
    $message = "Name: " . $_POST['name'] . "\r\n" . "e-mail: " . $_POST['email'] . "\r\n" . "Phone: " . $_POST['phone'] . "\r\n\r\n" . $_POST['message'];
    $headers = 'From: pgz30mrnrl93@pazarealestate.com' . "\r\n" .
        'Reply-To: pgz30mrnrl93@pazarealestate.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
?>