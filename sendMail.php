<?php

$to      = 'contact@alexiscassan.fr';
$subject = '[alexiscassan.fr] Contact from '. $_POST['society'];
$message = $_POST['message'];
$headers = 'From: '. $_POST['email'] . "\r\n" .
'Reply-To: '. $_POST['email'] . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: index.html');