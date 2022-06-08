<?php
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message .= "Suscribir a: " . $mail . " \r\n";
$message .= "Enviado el: " . date("Y-m-d H:i:s");

$para = 'pedrodeveloper98@gmail.com';
$asunto = 'Suscribir a Cliente';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>