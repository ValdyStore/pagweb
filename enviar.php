
      
<?php
$c_country = $_POST['c_country'];
$c_fname = $_POST['c_fname'];
$c_lname = $_POST['c_lname'];
$c_address = $_POST['c_address'];
$c_state_country = $_POST['c_state_country'];
$c_postal_zip = $_POST['c_postal_zip'];
$c_email_address = $_POST['c_email_address'];
$c_phone = $_POST['c_phone'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $c_fname . " \r\n";
$message .= "Su e-mail es: " . $c_email_address . " \r\n";
$message .= "Teléfono de contacto: " . $c_phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'valdystore0810@gmail.com';
$asunto = 'pedido';

mail($para, $asunto, utf8_decode($message), $header);


?>
-->
