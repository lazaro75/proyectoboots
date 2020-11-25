<?php
$name = $_POST["Nombre y Apellido"];
$mail =$_POST["Correo electrónico"] 
$message=$_POST{"menssage"}
$para ="lazaro.doc@hotmail.com.ar";
$asunto ="dato de la pagina";
mail( $para,$asunto, utf8_encode($Mensaje),$header);
$header= "from:" - $mail- "\r\n";
$header="x-mailer: PHP/". phpversion() . "\r\n";
$header="mine-version: 1.0 "\r\n";

?>


