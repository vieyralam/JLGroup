<?php
    $destino = "vieyralam@gmail.com";
    $nombre = $_POST ["Nombre"];
    $email = $_POST ["Email"];
    $asunto = $_POST ["Asunto"];
    $mensaje = $_POST ["Mensaje"];
    $contenido = "Nombre: " . $nombre . "\nEmail: " . "$email" . "\nAsunto: " . "$asunto" . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto", $contenido);
        header("Location:gracias.html");
?>