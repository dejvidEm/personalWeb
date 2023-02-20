<?php
$name = $_POST['meno'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "mikulasdejvid@gmail.com"."\r\n";
$subject = "Email z osobného portfólia";
$output ="Meno a priezvisko: ". $name . "\r\n <br> Email: " . $email . "\r\n <br>Správa: " . $message;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: "www.ponorka-trebisov.sk" <no-reply@ponorka.sk>' . "\r\n";

mail($to,$subject,$output,$headers);

?>