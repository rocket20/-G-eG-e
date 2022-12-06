<?php 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$destinatario = "leonelalvarez.info@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Telefono: $telefono \n";
$carta = "Mensaje: $mensaje";


mail($destinatario, $asunto, $carta);
header('locaion:mensaje-de-envio.html')


?>
