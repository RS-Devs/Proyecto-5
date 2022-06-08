<?php
$name = $_POST['form_name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$no_of_persons = $_POST['no_of_persons'];
$date = $_POST['date-picker'];
$time = $_POST['time-picker'];
$preferred_food = $_POST['preferred_food'];
$occasion = $_POST['occasion'];



$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su teléfono es: " . $phone . " \r\n";
$message .= "Número de personas: " . $no_of_persons . " \r\n";
$message .= "Para el día: " . $date . " \r\n";
$message .= "Hora de reserva: " . $time . " \r\n";
$message .= "Comida de preferencia: " . $preferred_food . " \r\n";
$message .= "Ocasión: " . $occasion . " \r\n";
$message .= "Enviado el: " . date("Y-m-d H:i:s");

$para = 'pedrodeveloper98@gmail.com';
$asunto = 'Mensaje de... Reserva prueba H&F';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:enviado.html");
?>


