<?php

// Verificar si los campos existen y sanitizar los datos
if (isset($_POST['email'], $_POST['nombre'], $_POST['producto'], $_POST['descripcion'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nombre = htmlspecialchars(strip_tags($_POST['nombre']), ENT_QUOTES, 'UTF-8');
    $producto = htmlspecialchars(strip_tags($_POST['producto']), ENT_QUOTES, 'UTF-8');
    $descripcion = htmlspecialchars(strip_tags($_POST['descripcion']), ENT_QUOTES, 'UTF-8');

    // Validar que los campos no estén vacíos
    if (empty($email) || empty($nombre) || empty($producto) || empty($descripcion)) {
        echo "Todos los campos deben estar completos.";
        exit;
    }

    // Validar el formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no tiene un formato válido.";
        exit;
    }

    // Definir el destino y asunto
    $destino = 'merchan.colombia@gmail.com';
    $asunto = 'Pedido';

    // Crear el cuerpo del mensaje
    $cuerpo = '
    <html>
        <head>
            <title>Pedido de: '.$nombre.'</title>
        </head>
        <body>
            <h1>Pedido de: '.$nombre.'</h1>
            <p><strong>Producto:</strong> '.$producto.'</p>
            <p><strong>Descripción:</strong> '.$descripcion.'</p>
        </body>
    </html>
    ';

    // Cabeceras del correo
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: $nombre <$email>\r\n"; // Correo del remitente
    $headers .= "Reply-To: $email\r\n"; // Dirección para responder al correo
    $headers .= "X-Mailer: PHP/" . phpversion(); // Opcional, para especificar el programa de envío

    // Enviar el correo y verificar si fue exitoso
    if (mail($destino, $asunto, $cuerpo, $headers)) {
        echo "Email enviado correctamente";
    } else {
        // Mejorar la depuración
        echo "Error al enviar el email. Intente más tarde.";
        // Podrías agregar un log aquí para registrar el error o investigar el problema.
    }

    header("location: ../bienvenida.php");

} else {
    echo "Faltan datos en el formulario";
}

?>
