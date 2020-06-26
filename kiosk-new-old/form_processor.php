<?php

$to      = 'afzalmdkhan@gmail.com';
$empno	 = $_POST['empno'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['name'] . ' <myemail@email.com>' . "\r\n" .
    'Reply-To: myemail@email.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: thank-you.html');
exit;

?>
