<?php
    $destinatario = "jumorillo@telesurtv.net";
    $asunto = "test correo intranet";
    $mensaje = "Mensaje de prueba enviado desde un script PHP desde el servidor intranet";
    mail($destinatario,$asunto,$mensaje);
?>
