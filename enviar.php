<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$destino = "contacto@nuncamuere.com.ar";

$asunto = "Nuevo mensaje desde la web de Nunca Muere";

$contenido = "
Nombre: $nombre

Email: $email

Mensaje:
$mensaje
";

$headers = "From: noreply@nuncamuere.com.ar";

mail($destino, $asunto, $contenido, $headers);

header("Location: gracias.html");

exit();

?>