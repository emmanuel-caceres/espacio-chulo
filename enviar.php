<?php

$destino= "emmanuelc89@gmail.com";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre:" . $nombre . "\nApellido:" . $apellido . "\nTelefono" . $telefono . "\nEmail:" . $email . "\nMensaje:" . $mensaje;

mail($destino, "Consulta por la web", $contenido);

header("Location:gracias.html");


?>