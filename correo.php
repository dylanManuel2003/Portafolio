<?php
    $destinatario = 'dylanperaltasalerno@gmail.com';
    //correo de destino
    $nombre = $_POST['name'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['message'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de Dylan Peralta";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<h3>Mensaje enviado exitosamente!</h3>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>